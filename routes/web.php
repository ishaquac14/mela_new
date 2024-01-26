<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LisenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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

Route::get(
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