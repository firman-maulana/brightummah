<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::resource('programs', ProgramController::class);

Route::get('/detailprogram', [ProgramController::class, 'detail'])
    ->name('programs.detail');

Route::get('/faqs', function() {
    return view('pages.faq');
});

Route::get('/error', function() {
    return view('pages.error.error');
});

Route::get('/login', function() {
    return view('pages.auth.login');
});

Route::get('/register', function() {
    return view('pages.auth.register');
});

Route::get('/menarik', function() {
    return view('pages.menarik');
});

Route::get('/menarik1', function() {
    return view('pages.menarik1');
});


Route::resource('about', controller: AboutController::class);