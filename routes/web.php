<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\QuickOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/pesan', [OrderController::class, 'choose'])
    ->name('pages.orders.choose');

Route::get('/pesan/form', [OrderController::class, 'form'])
    ->name('pages.orders.form');

Route::post('/pesan', [OrderController::class, 'store'])
    ->name('pages.orders.store');

Route::get('/pesan/success/store', [OrderController::class, 'successStore'])
    ->name('pages.orders.success.store');

Route::get('/pesan/success/outside/{order}', [OrderController::class, 'successOutside'])
    ->name('pages.orders.success.outside');

Route::get('/cek-status', [OrderStatusController::class, 'index'])
    ->name('orders.status');

Route::get('/cek-status/detail', [OrderStatusController::class, 'detail'])
    ->name('orders.status.detail');


require __DIR__.'/auth.php';
