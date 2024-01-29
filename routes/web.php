<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LisenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/user/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get(
    '/lisence',
    [LisenceController::class, 'index']
)->name('lisence.index');

Route::get(
    '/lisence/create',
    [LisenceController::class, 'create']
)->name('lisence.create');

Route::post(
    '/lisence/store',
    [LisenceController::class, 'store']
)->name('lisence.store');

Route::get(
    '/lisence/{id}',
    [LisenceController::class, 'show']
)->name('lisence.show');

Route::get(
    '/lisence/edit/{id}',
    [LisenceController::class, 'edit']
)->name('lisence.edit');

Route::put(
    '/lisence/update/{id}',
    [LisenceController::class, 'update']
)->name('lisence.update');

Route::get(
    '/lisence/destroy/{id}',
    [LisenceController::class, 'destroy']
)->name('lisence.destroy');

Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)->name('dashboard.index');

Route::get(
    '/transaction',
    [TransactionController::class, 'index']
)->name('transaction.index');

Route::get(
    '/transaction/create',
    [TransactionController::class, 'create']
)->name('transaction.create');

Route::post(
    '/transaction/store',
    [TransactionController::class, 'store']
)->name('transaction.store');

Route::get(
    '/transaction/{id}',
    [TransactionController::class, 'show']
)->name('transaction.show');

Route::get(
    '/transaction/edit/{id}',
    [TransactionController::class, 'edit']
)->name('transaction.edit');

Route::put(
    '/transaction/update/{id}',
    [TransactionController::class, 'update']
)->name('transaction.update');

Route::get(
    '/transaction/destroy/{id}',
    [TransactionController::class, 'destroy']
)->name('transaction.destroy');