<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
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
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
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
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Customers
Route::get('admin/customers', function () {
    return view('admin.customers');
})->name('admin.customers');

// Products
Route::prefix('admin/products')->name('admin.products.')->group(function () {
    Route::get('/', [BarangController::class, 'index'])->name('index');         
    Route::get('/create', [BarangController::class, 'create'])->name('create'); 
    Route::post('/', [BarangController::class, 'store'])->name('store');        
    Route::get('/{id}/edit', [BarangController::class, 'edit'])->name('edit');  
    Route::put('/{id}', [BarangController::class, 'update'])->name('update');   
    Route::delete('/{id}', [BarangController::class, 'destroy'])->name('destroy'); 
});

// Promo
Route::get('admin/promo', function () {
    return view('admin.promo');
})->name('admin.promo');

// Kategori
Route::prefix('admin/categories')->name('admin.categories.')->group(function () {
    Route::get('/', [KategoriController::class, 'index'])->name('index');      // admin.categories.index
    Route::get('/create', [KategoriController::class, 'create'])->name('create'); // admin.categories.create
    Route::post('/', [KategoriController::class, 'store'])->name('store');     // admin.categories.store
    Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('edit'); // admin.categories.edit
    Route::put('/{id}', [KategoriController::class, 'update'])->name('update'); // admin.categories.update
    Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('destroy'); // admixn.categories.destroy
});

Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);

require __DIR__.'/auth.php';