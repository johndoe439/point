<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Deposit;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('auth', 'verified')->group(function () {
    // dashboard
    Route::get('/dashboard', [UserController::class, 'view'])->name('dashboard');

    // deposit
    Route::get('/dashboard/deposit', [UserController::class, 'deposit'])->name('deposit');
    Route::post('/dashboard/deposit', [userController::class, 'deposits'])->name('user.deposits');

    // deposit history
    Route::get('/user/deposit-history', [UserController::class, 'depositHistory'])->name('depositHistory');

    // withdraw
    Route::get('/dashboard/withdraw', [UserController::class, 'withdraw'])->name('withdraw');
    Route::post('/dashboard/withdraw', [userController::class, 'storewithdrawal'])->name('user.withdrawals');

    // withdrawhistory
    Route::get('/dashboard/withdraw-history', [UserController::class, 'withdrawHistory'])->name('withdrawHistory');


    Route::get('/dashboard/plan', [UserController::class, 'plan'])->name('plan');
    Route::post('/dashboard/plans', [userController::class, 'invests'])->name('user.invests');


    Route::get('/dashboard/plan-history', [UserController::class, 'planHistory'])->name('planHistory');


    // Admin Section

    Route::get('/admin/dashboard', [AdminController::class, 'view'])->name('admin');
    Route::get('/admin/dashboard/userdetail/{user}', [AdminController::class, 'userDetail'])->name('admin.userDetail');
    Route::post('/admin/dashboard/userdetail/{user}/update-balance', [AdminController::class, 'updatebalance'])->name('admin.update_balance');

    Route::get('/admin/dashboard/crypto', [AdminController::class, 'crypto'])->name('crypto');
    Route::post('/admin/dashboardaddresses', [AdminController::class, 'storeCryptoAddress'])->name('admin.cryptoaddresses.store');
    Route::delete('/admin/dashboard/addresses/{id}', [AdminController::class, 'destroyaddress'])->name('cryptoaddress.destroy');


// Deposit
    Route::get('/admin/dashboard/deposit', [AdminController::class, 'deposit'])->name('admin.deposit');
    Route::put('/admin/deposit/{id}/status', [AdminController::class, 'updatedeposit'])->name('admin.deposit-status');
    Route::delete('/admin/dashboard/plans/{id}', [AdminController::class, 'deletedeposit'])->name('admin.plan.delete');

    // withdraw
    Route::get('/admin/dashboard/withdraw', [AdminController::class, 'withdraw'])->name('admin.withdraw');
    Route::put('/admin/withdraw/{id}/status', [AdminController::class, 'updatewithdraw'])->name('admin.withdraw-status');
    Route::delete('/admin/dashboard/withdraw/{id}', [AdminController::class, 'deletewithdraw'])->name('admin.withdraw.delete');

// plan
    Route::get('/admin/dashboard/plan', [AdminController::class, 'plan'])->name('admin.plan');
    Route::get('/admin/dashboard/plan-history', [AdminController::class, 'planhistory'])->name('admin.plan.history');
    Route::delete('/admin/dashboard/plans/{id}', [AdminController::class, 'deleteplan'])->name('admin.plan.delete');
    Route::post('/admin/dashboard/plans', [AdminController::class, 'storeplan'])->name('admin.plan.store');
    Route::put('/admin/plans-history/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.plans-history.update-status');
});

require __DIR__ . '/auth.php';
