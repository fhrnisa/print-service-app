<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\QuickOrderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// CUSTOMER ROUTES

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


// ADMIN ROUTES

Route::get('/dashboard', function () {
    return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');
    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/orders', [AdminOrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/admin/orders/{order}', [AdminOrderController::class, 'show'])->name('admin.orders.show');
    Route::put('/admin/orders/{order}', [AdminOrderController::class, 'update'])->name('admin.orders.update');
    Route::delete('/admin/orders/{order}', [AdminOrderController::class, 'destroy'])->name('admin.orders.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');  
    Route::delete('/admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

    require __DIR__.'/auth.php';
    