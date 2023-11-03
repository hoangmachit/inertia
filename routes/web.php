<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->as('admin.')->group(function () {

        Route::prefix('product')->as('product.')->controller(ProductController::class)->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::get('{product}', 'edit')->name('edit');
        });

        Route::prefix('customer')->as('customer.')->controller(CustomerController::class)->group(function () {
            Route::get('', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::get('{customer}', 'edit')->name('edit');
            Route::put('{customer}', 'update')->name('update');
        });

        Route::prefix('setting')->as('setting.')->controller(SettingController::class)->group(function () {
            Route::get('', 'index')->name('index');
            Route::put('', 'update')->name('update');
        });
    });

});
require __DIR__ . '/client.php';
require __DIR__ . '/auth.php';
