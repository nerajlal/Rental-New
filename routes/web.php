<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.landing');
})->name('home');

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminRegisterController;

Route::get('/', function () { return view('main.landing'); })->name('home');
Route::get('/pricing', function () { return view('main.pricing'); })->name('pricing');
Route::get('/how-it-works', function () { return view('main.how-it-works'); })->name('how-it-works');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    Route::post('/register', [AdminRegisterController::class, 'register'])->name('register.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        
        // Placeholder routes for dashboard links to prevent errors
        Route::get('/analytics', function () { return 'Analytics'; })->name('analytics');
        Route::get('/orders', function () { return 'Orders'; })->name('orders');
        Route::get('/customers', function () { return 'Customers'; })->name('customers');
        Route::get('/products', function () { return 'Products'; })->name('products');
    });
});
