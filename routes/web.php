<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CasingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdsAdminController;
use App\Http\Controllers\BoquetteController;
use App\Http\Controllers\PhoneStrapController;
use App\Http\Controllers\ProductAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin/index', function () {
    return view('admin/index');
});

// Route::get('/admin/product/create', function () {
//     return view('admin/product/create');
// });

// Route::get('/admin/index', function () {
//     return view('admin/index');
// })->middleware(['auth', 'verified'])->name('admin/index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/casing', [CasingController::class, 'index']);
Route::get('/phoneStrap', [PhoneStrapController::class, 'index']);
Route::get('/boquette', [BoquetteController::class, 'index']);

Route::get('/casing', [ProductController::class, 'showCasing'])->name('products.casing');

Route::get('/phoneStrap', [ProductController::class, 'showPhoneStrap'])->name('products.phoneStrap');

Route::get('/boquette', [ProductController::class, 'showBoquette'])->name('products.boquette');

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index')->middleware(['auth', 'verified']);

Route::resource('/admin/product', ProductAdminController::class);

Route::get('/admin/product/export', [ProductAdminController::class, 'export'])->name('product.export');
Route::delete('/admin/product/all', [ProductAdminController::class, 'destroyAll'])->name('product.destroyAll');

Route::post('dashboard', [ContactController::class, 'store'])->name('dashboard.store');

Route::get('/search', [SearchController::class, 'index']);
Route::get('/search', [SearchController::class, 'search'])->name('products.search');

// ADS START
Route::resource('/admin/ads', AdsAdminController::class);

Route::delete('/admin/ads/export', [AdsAdminController::class, 'destroyAll'])->name('ads.destroyAll');

Route::get('/admin/ads/all', [AdsAdminController::class, 'export'])->name('ads.export');
// ADS END

// CODE START
Route::resource('admin/code', CodeController::class);

Route::delete('/admin/code/export', [CodeController::class, 'destroyAll'])->name('code.destroyAll');

Route::get('/admin/code/all', [CodeController::class, 'export'])->name('code.export');
// CODE END

Route::get('admin/contact/index', [ContactController::class, 'index'])->name('admin.contact.index');
Route::delete('admin/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

require __DIR__ . '/auth.php';
