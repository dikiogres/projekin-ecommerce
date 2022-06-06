<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\CheckoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::middleware('admin:admin')->group(function(){
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.index');
    })->name('dashboard')->middleware('auth:admin');
});

Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');

Route::get('admin/profile/edit', [AdminProfileController::class, 'adminProfileEdit'])->name('admin.profile.edit');

Route::post('admin/profile/store', [AdminProfileController::class, 'adminProfileStore'])->name('admin.profile.store');

Route::get('admin/change/password', [AdminProfileController::class, 'adminChangePassword'])->name('admin.change.password');

Route::post('update/change/password', [AdminProfileController::class, 'adminUpdateChangePassword'])->name('update.change.password');

// User Routes
Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [IndexController::class, 'index']);

// Cart Routes
Route::get('cart/', [CartController::class, 'index']);

// Wishlist Routes
Route::get('wishlist/', [WishlistController::class, 'index']);

// Checkout Routes
Route::get('checkout/', [CheckoutController::class, 'index']);