<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Planhistory;
use App\Models\Planshistory;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    //

    public function view()
    {


        // Total approved deposits for the authenticated user
        $deposits = Deposit::where('user_id', Auth::id())
            ->where('status', 'approved')
            ->sum('amount');

        // Total approved withdrawals for the authenticated user
        $withdrawals = Withdrawal::where('user_id', Auth::id())
            ->where('status', 'approved')
            ->sum('amount');



        $user = Auth::user();

        if ($user->role == 'user') {
            return view('user.dashboard', compact('user', 'deposits', 'withdrawals'));
        } else {
            return redirect()->route('admin');
        }
    }


    public function deposit()
    {
        $user = Auth::user();
        $deposits = $user->deposits;
        $addresses = Address::all();

        return view('user.deposit', compact('deposits', 'addresses'));
    }

    public function deposits(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01',
            'image' => 'nullable|image|max:2048',
        ]);

        // Debug the request
        \Log::info('Request data:', $request->all());
        \Log::info('Files:', $request->files->all());

        do {
            $transactionId = Str::upper(Str::random(5));
        } while (Deposit::where('transaction_id', $transactionId)->exists());

        $imagePath = null;
        if ($request->hasFile('image')) {
            // Ensure the deposits directory exists
            Storage::disk('public')->makeDirectory('deposits');

            $imagePath = Storage::disk('public')->put('deposits', $request->file('image'));
            \Log::info('Image stored at: ' . $imagePath);
        } else {
            \Log::info('No image file received');
        }

        Deposit::create([
            'user_id' => Auth::id(),
            'transaction_id' => $transactionId,
            'amount' => $request->amount,
            'status' => 'pending',
            'image' => $imagePath,
        ]);

        return redirect()->route('deposit')->with('success', 'Deposit submitted successfully!');
    }


    public function deposithistory(Request $request)
    {
        $currentUser = $request->user();
        $deposits = $currentUser->deposits()->get();


        return view('user.depositHistory', compact('deposits'));
    }
    public function withdraw()
    {
        $user = Auth::user();
        return view('user.withdraw');
    }

    public function withdrawals(Request $request)
    {
        $user = Auth::user();
        // Validate input
        $request->validate([
            'crypto_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'crypto_address' => 'required|string|max:255',
            'network' => 'required|string|max:255',
        ]);

        // Check if balance is greater than 0
        if ($user->balance <= 0) {
            \Log::info('Withdrawal failed: User balance is zero', ['user_id' => $user->id]);
            return redirect()->route('withdraw')->with('error', 'Your balance is zero. Please deposit funds.');
        }

        // Check if amount is less than or equal to balance
        if ($request->amount > $user->balance) {
            \Log::info('Withdrawal failed: Insufficient balance', [
                'user_id' => $user->id,
                'balance' => $user->balance,
                'requested_amount' => $request->amount
            ]);
            return redirect()->route('withdraw')->with('error', 'Insufficient balance for this withdrawal.');
        }

        // Generate unique transaction ID
        do {
            $transactionId = Str::upper(Str::random(5));
        } while (Withdrawal::where('transaction_id', $transactionId)->exists());

        // Create withdrawal
        Withdrawal::create([
            'user_id' => $user->id,
            'transaction_id' => $transactionId,
            'amount' => $request->amount,
            'crypto_name' => $request->crypto_name,
            'network' => $request->network,
            'status' => 'pending',
            'crypto_address' => $request->crypto_address,
        ]);

        // Deduct amount from balance
        $user->balance -= $request->amount;
        $user->save();

        \Log::info('Withdrawal processed', [
            'user_id' => $user->id,
            'transaction_id' => $transactionId,
            'amount' => $request->amount,
            'new_balance' => $user->balance
        ]);

        return redirect()->route('withdraw')->with('success', 'Withdrawal request submitted successfully!');
    }

    public function withdrawHistory(Request $request)
    {
        $currentUser = $request->user();
        $withdrawals = $currentUser->withdrawals()->get();

        return view('user.withdrawHistory', compact('withdrawals'));
    }
    public function plan()
    {
        $user = Auth::user();
        $planshistory = $user->planshistories;
        $plans = Plan::all();

        return view('user.plan', compact('plans', 'planshistory'));
    }
    public function planHistory(Request $request)
    {
        $currentUser = $request->user();
        if (!$currentUser) {
            return redirect()->route('login');
        }
        $planshistories = $currentUser->planshistories()->get();
        return view('user.planHistory', compact('planshistories'));
    }

    // Corrected Controller Function
    public function invests(Request $request)
    {
        $user = Auth::user();
        $plan = Plan::findOrFail($request->input('plan_id'));

        $request->validate([
            'plan_id' => 'required|exists:plans,id',
            'amount' => "required|numeric|min:{$plan->min_amount}|max:{$plan->max_amount}",
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
        ]);

        // Set start_date to today if not provided or invalid
        $startDate = $request->filled('start_date') && $request->start_date ? Carbon::parse($request->start_date) : Carbon::today();

        // Set end_date based on duration if not provided or invalid
        $endDate = $request->filled('end_date') && $request->end_date ? Carbon::parse($request->end_date) : $startDate->copy()->addDays($plan->duration);

        // Check balance
        if ($user->balance <= 0) {
            \Log::info('Investment failed: Zero balance', ['user_id' => $user->id]);
            return redirect()->route('plan')->with('error', 'Your balance is zero. Please deposit funds.');
        }

        if ($request->amount > $user->balance) {
            \Log::info('Investment failed: Insufficient balance', [
                'user_id' => $user->id,
                'balance' => $user->balance,
                'requested_amount' => $request->amount
            ]);
            return redirect()->route('user.invest')->with('error', 'Insufficient balance for this investment.');
        }

        // Calculate expected profit
        $expectedProfit = $request->amount * ($plan->profit_percentage / 100);

        // Create investment
        Planshistory::create([
            'user_id' => $user->id,
            'plan_id' => $request->plan_id,
            'amount' => $request->amount,
            'expected_profit' => $expectedProfit,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => 'active',
        ]);

        // Deduct balance
        $user->balance -= $request->amount;
        $user->save();

        \Log::info('Investment processed', [
            'user_id' => $user->id,
            'plan_id' => $request->plan_id,
            'amount' => $request->amount,
            'expected_profit' => $expectedProfit,
            'new_balance' => $user->balance
        ]);

        return redirect()->route('plan')->with('success', 'Plan chosen successfully!');
    }
}
