<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    Route::get('/','index');
    Route::get('/services','services');
    Route::get('/about','about');
    Route::get('/search','searchTrack');
    // Route::post('/donate/{slug}','store');

    
});

Route::get('/contact', App\Livewire\Frontend\Contact\Index::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    // Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(SettingController::class)->group(function () {
        Route::get('/settings','index');
        Route::post('settings', 'store');


    });
    Route::get('/track', [App\Http\Controllers\Admin\TrackController::class, 'index']);
    Route::get('/search', [App\Http\Controllers\Admin\TrackController::class, 'searchTrack']);

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard','index');

    });

    Route::controller(ParcelDashboard::class)->group(function () {
        Route::get('/parcel','index');
        Route::get('/parcel/create','create');
        Route::post('/parcel','storeData');
        Route::get('/parcel/{parcel}/edit','edit');
        Route::put('/parcel/{parcel}','update');
        // Route::get('/parcel/{parcel}/edit','edit');
        Route::get('/parcel-image/{parcel_image_id}/delete','destroyImage');
        Route::get('/parcel/{parcel}/delete','destroy');
        Route::get('/parcel/{parcel}/status','editStatus');
        Route::put('/parcel-track/{parcel_id}','updateStatus');
        Route::get('/parcel/{parcel}/view-receipt','viewReceipt');
    });

    Route::get('/branch', App\Livewire\Admin\Branch\Index::class);
    Route::get('/staff', App\Livewire\Admin\Branch\Index::class);
    //Route::get('/track', App\Livewire\Admin\Track\Index::class);

    // Route::controller(SettingController::class)->group(function () {
    //     Route::get('/setting','index');
    //     Route::get('/setting/{setting}/edit','edit');
    //     Route::put('/setting/{setting}','update');


    // });
});
