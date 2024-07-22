<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ParcelDashboard;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings','index');
        Route::post('settings', 'store');

        
    });
    // Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index']);

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard','index');
           
    });

    Route::controller(ParcelDashboard::class)->group(function () {
        Route::get('/parcel','index');
        Route::get('/parcel/create','create');
        Route::post('/parcel','store');
   
    });
    Route::post('new-parcel-post', [App\Http\Controllers\Admin\ParcelDashboard::class,'store'])->name('parcel.post');

    Route::get('/branch', App\Livewire\Admin\Branch\Index::class);
    Route::get('/staff', App\Livewire\Admin\Branch\Index::class);

    // Route::controller(SettingController::class)->group(function () {
    //     Route::get('/setting','index');
    //     Route::get('/setting/{setting}/edit','edit');
    //     Route::put('/setting/{setting}','update');

        
    // });
});