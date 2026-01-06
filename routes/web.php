<?php

use App\Http\Controllers\JenjangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramsController;

Route::get('/', function () {
    return view('pages.home');
});

Route::resource('detailprogram', ProgramsController::class);

Route::resource('programs', JenjangController::class);
