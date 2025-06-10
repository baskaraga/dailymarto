<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RoleMiddleware;
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
Route::get('/', function () {
    return view('welcome');
});


// Route untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Route untuk user
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});

// Detail Produk
Route::get('/user/detail_produk', function () {
    return view('user.detail_produk');
});

// Cart
Route::get('/user/cart', function () {
    return view('user.cart-page');
})->name('user.cart');

// Checkout
Route::get('user/checkout', function () {
    return view('user.checkout');
})->name('user.checkout');

// Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard.index');

// Customers
Route::get('/customers', function () {
    return view('admin.customers');
})->name('customers.index');

// Products
Route::get('/products', function () {
    return view('admin.products');
})->name('products.index');

// Promo
Route::get('/promo', function () {
    return view('admin.promo');
})->name('promo.index');

require __DIR__.'/auth.php';