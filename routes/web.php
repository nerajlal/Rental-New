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
        Route::get('/sites', [AdminController::class, 'sites'])->name('sites');
        Route::get('/pending-sites', [AdminController::class, 'pending'])->name('pending');
        Route::post('/approve-site/{id}', [AdminController::class, 'approve'])->name('approve');
        Route::post('/reject-site/{id}', [AdminController::class, 'reject'])->name('reject');
        Route::get('/tenants', [AdminController::class, 'tenants'])->name('tenants');
        Route::get('/billing', [AdminController::class, 'billing'])->name('billing');
        Route::get('/report', [AdminController::class, 'report'])->name('report');
        Route::get('/support', [AdminController::class, 'support'])->name('support');
    });
});

use App\Http\Controllers\ShopController;

Route::prefix('shop')->name('shop.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [ShopController::class, 'index'])->name('dashboard');
    Route::get('/orders', [ShopController::class, 'orders'])->name('orders');
    Route::get('/products', [ShopController::class, 'products'])->name('products');
    Route::get('/customers', [ShopController::class, 'customers'])->name('customers');
    Route::get('/content', [ShopController::class, 'content'])->name('content');
    Route::get('/analytics', [ShopController::class, 'analytics'])->name('analytics');
    Route::get('/marketing', [ShopController::class, 'marketing'])->name('marketing');
    Route::get('/discounts', [ShopController::class, 'discounts'])->name('discounts');
    Route::get('/online-store', [ShopController::class, 'onlineStore'])->name('online-store');
    
    // Rental Management
    Route::get('/calendar', [ShopController::class, 'calendar'])->name('calendar');
    Route::get('/returns', [ShopController::class, 'returns'])->name('returns');
    Route::get('/deposits', [ShopController::class, 'deposits'])->name('deposits');
    Route::get('/maintenance', [ShopController::class, 'maintenance'])->name('maintenance');
    
    // Navigation Editor
    Route::get('/navigation', [ShopController::class, 'navigation'])->name('navigation');
    Route::post('/navigation/save', [ShopController::class, 'saveNavigation'])->name('navigation.save');
    
    // Inner pages
    Route::get('/products/create', [ShopController::class, 'productsCreate'])->name('products.create');
    Route::get('/orders/{id}', [ShopController::class, 'ordersView'])->name('orders.view');
});
