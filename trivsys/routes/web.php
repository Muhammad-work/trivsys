<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/web-servisec', function () {
    return view('front.web-services');
})->name('web');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('front.about');
})->name('about');

Route::get('/digital-marketing', function () {
    return view('front.digital');
})->name('digital');

Route::get('/erp-software-servic', function () {
    return view('front.erp');
})->name('erp');

Route::get('/crm-software-servic', function () {
    return view('front.crm');
})->name('crm');

Route::get('/app-servisec', function () {
    return view('front.app');
})->name('app');
