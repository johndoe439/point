<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Deposit;
use App\Models\Plan;
use App\Models\Planshistory;
use App\Models\User;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function view()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.dashboard', compact('users'));
    }
    public function crypto()
    {
        $addresses = Address::all();
        return view('admin.crypto', compact('addresses'));
    }
    public function storeCryptoAddress(Request $request)
    {
        try {
            // Validate the input
            $request->validate([
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'network' => 'required|string|max:255',
            ]);

            // Create a new CryptoAddress record
            Address::create([
                'name' => $request->input('name'),
                'network' => $request->input('network'),
                'address' => $request->input('address'),
            ]);

            return redirect()->route('crypto')
                ->with('success', 'Crypto address saved successfully');
        } catch (\Exception $e) {
            Log::error('Error saving crypto address: ' . $e->getMessage());
            return back()->with('error', 'Failed to save crypto address: ' . $e->getMessage());
        }
    }
    public function destroyaddress($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();

        return redirect()->back()->with('success', 'Crypto address deleted successfully.');
    }


    public function deposit()
    {
        $deposits = Deposit::with('user')->get();
        return view('admin.deposit', compact('deposits'));
    }
    public function userDetail(User $user)
    {
        return view('admin.userDetail', compact('user'));
    }
    public function withdraw()
    {
         $withdrawals = Withdrawal::with('user')->get();
        return view('admin.withdraw', compact('withdrawals'));
    }



    public function updatebalance(Request $request, User $user)
    {
        try {
            // Validate the input
            $request->validate([
                'balance' => 'required|numeric|min:0',
            ]);

            // Update the user's balance
            $user->balance = $request->input('balance');
            $user->save();

            return redirect()->route('admin.userDetail', $user->id)
                ->with('success', 'User balance updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating user balance: ' . $e->getMessage());
            return back()->with('error', 'Failed to update balance: ' . $e->getMessage());
        }
    }


    public function plan()
    {

        $plans = Plan::with('user')->get();
        return view('admin.plan', compact('plans'));
    }
    public function planhistory()
    {

        $planshistories = Planshistory::with('user')->get();
        return view('admin.planhistory', compact('planshistories'));
    }
    public function storeplan(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'min_amount' => 'required|numeric|min:0',
            'max_amount' => 'required|numeric|min:0|gte:min_amount',
            'profit_percentage' => 'required|numeric|min:0|max:100',
            'duration' => 'required|integer|min:1',
        ]);

        // Create a new InvestmentPlan record
        Plan::create([
            'name' => $request->input('name'),
            'min_amount' => $request->input('min_amount'),
            'max_amount' => $request->input('max_amount'),
            'profit_percentage' => $request->input('profit_percentage'),
            'duration' => $request->input('duration'),
        ]);

        return redirect()->route('admin.plan')
            ->with('success', 'Plan saved successfully');
    }

    public function deleteplan($id)
    {
        $plans = Plan::findOrFail($id);
        $plans->delete();
        return redirect()->back()->with('success', 'Investment plan deleted!');
    }
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:active,completed',
        ]);

        $plansHistory = Planshistory::findOrFail($id);
        $plansHistory->status = $request->status;
        $plansHistory->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }
    public function updatedeposit(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $deposit = Deposit::findOrFail($id);
        $deposit->status = $request->status;
        $deposit->save();



        return redirect()->back()->with('success', 'Status updated successfully.');
    }
    public function updatewithdraw(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $withdrawal = Withdrawal::findOrFail($id);
        $withdrawal->status = $request->status;
        $withdrawal->save();



        return redirect()->back()->with('success', 'Status updated successfully.');
    }
}
