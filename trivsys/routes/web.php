<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\generalController;
use App\Http\Controllers\homeController;

Route::controller(dashboardController::class)->group(function () {
    Route::get('/dashboard', 'viewDashboard')->name('dashboard');
    Route::get('/dashboard/viewGeneralSetting', 'viewGeneralSetting')->name('viewGeneralSetting');
});

Route::controller(generalController::class)->group(function () {
    Route::get('/dashboard/viewGeneralSetting', 'viewGeneralSetting')->name('viewGeneralSetting');
    Route::post('/dashboard/{id}/storeGeneralSetting', 'storeGeneralSetting')->name('storeGeneralSetting');
});

Route::controller(homeController::class)->group(function () {
    Route::get('/', 'viewHome')->name('home');
    Route::get('/about-us', 'viewAbout')->name('about');
    Route::get('/web-servisec', 'viewWebPage')->name('web');
    Route::get('/app-servisec', 'viewAppPage')->name('app');
    Route::get('/digital-marketing', 'viewdigital')->name('digital');
    Route::get('/erp-software-servic', 'viewErp')->name('erp');
    Route::get('/crm-software-servic', 'viewCrm')->name('crm');
    Route::get('/portfoilo', 'viewProfile')->name('portfoilo');
    Route::get('/contact', 'viewContact')->name('contact');
});


// Route::get('/', function () {
//     return view('front.home');
// })->name('home');

// Route::get('/web-servisec', function () {
//     return view('front.web-services');
// })->name('web');

// Route::get('/contact', function () {
//     return view('front.contact');
// })->name('contact');

// Route::get('/about-us', function () {
//     return view('front.about');
// })->name('about');

// Route::get('/digital-marketing', function () {
//     return view('front.digital');
// })->name('digital');

// Route::get('/erp-software-servic', function () {
//     return view('front.erp');
// })->name('erp');

// Route::get('/crm-software-servic', function () {
//     return view('front.crm');
// })->name('crm');

// Route::get('/app-servisec', function () {
//     return view('front.app');
// })->name('app');

// Route::get('/portfoilo', function () {
//     return view('front.portfoilo');
// })->name('portfoilo');

// Route::get('/dashboard', function () {
//     return view('admin.dashbord');
// })->name('dashboard');
