<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\generalController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
use App\Http\Middleware\validUser;

Route::controller(dashboardController::class)->middleware(validUser::class)->group(function () {
    Route::get('/dashboard', 'viewDashboard')->name('dashboard');
    Route::get('/dashboard/viewGeneralSetting', 'viewGeneralSetting')->name('viewGeneralSetting');
    Route::get('/dashboard/portfolio', 'viewPortfolio')->name('viewPortfolio');
    Route::get('/dashboard/add-portfolio', 'viewAddPortfolioForm')->name('viewAddPortfolioForm');
    Route::post('/dashboard/storePortfolio', 'storePortfolio')->name('storePortfolio');
    Route::post('/dashboard/{id}/UpdatePortfolio', 'UpdatePortfolio')->name('UpdatePortfolio');
    Route::get('/dashboard/{id}/deletePortfolio', 'deletePortfolio')->name('deletePortfolio');
    Route::get('/dashboard/{id}/edit', 'editPortfolioViewForm')->name('editPortfolioViewForm');
    Route::get('/dashboard/viewClientTable', 'viewClientTable')->name('viewClientTable');
    Route::get('/dashboard/{id}/Mail', 'viewMAilForm')->name('viewMAilForm');
    Route::post('/dashboard/sendMailToClient', 'sendMailToClient')->name('sendMailToClient');
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
    Route::post('/storeClientDetail', 'storeClientDetail')->name('storeClientDetail');
});


Route::controller(userController::class)->group(function () {
    Route::get('/dashboard/login', 'viewLoginForm')->name('login');
    Route::post('/dashbord/storeLoginData', 'storeLoginData')->name('storeLoginData');
    Route::get('/dashbord/logout', 'logout')->name('logout');
});




