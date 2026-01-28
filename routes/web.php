<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', fn() => view('pages.home'))->name('home');
Route::resource('programs', ProgramController::class)->only(['index']);
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/faqs', fn() => view('pages.faq'))->name('faqs');
Route::get('/error', fn() => view('pages.error.error'))->name('error');
Route::resource('detailprogram', ProgramController::class)->only(['show']);
Route::get('/menarik', fn() => view('pages.menarik'));
Route::get('/menarik1', fn() => view('pages.menarik1'));

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
});

Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('auth.google.callback');


Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/programs', [AdminController::class, 'programs'])->name('programs');
    Route::get('/programs/create', [AdminController::class, 'createProgram'])->name('programs.create');
    Route::post('/programs', [AdminController::class, 'storeProgram'])->name('programs.store');
    Route::get('/programs/{program}/edit', [AdminController::class, 'editProgram'])->name('programs.edit');
    Route::put('/programs/{program}', [AdminController::class, 'updateProgram'])->name('programs.update');
    Route::delete('/programs/{program}', [AdminController::class, 'destroyProgram'])->name('programs.destroy');
    
    Route::get('/users', [AdminController::class, 'users'])->name('users');
});

Route::get('/dashboard/analytics', fn() => view('coba.dashboard.analytics'))->name('analytics');
Route::get('/dashboard', fn() => view('coba.dashboard.dashboard'))->name('dashboard');
Route::get('/dashboard/fintech', fn() => view('coba.dashboard.fintech'))->name('fintech');
Route::get('/dashboard/user', fn() => view('coba.user'))->name('user');
Route::get('/dashboard/program', fn() => view('coba.program.index'))->name('program');
Route::get('/dashboard/detailprogram', fn() => view('coba.program.detail'))->name('detailprogram');
Route::get('/dashboard/inbox', fn() => view('coba.inbox'))->name('inbox');
Route::get('/dashboard/messages', fn() => view('coba.messages'))->name('messages');
Route::get('/dashboard/calendar', fn() => view('coba.calendar'))->name('calendar');
Route::get('/dashboard/myaccount', fn() => view('coba.settings.account'))->name('account');
Route::get('/dashboard/notifications', fn() => view('coba.settings.notifications'))->name('notifications');
Route::get('/dashboard/feedback', fn() => view('coba.settings.feedback'))->name('feedback');
Route::get('/dashboard/changelog', fn() => view('coba.changelog'))->name('changelog');
Route::get('/dashboard/authentication/signin', fn() => view('coba.authentication.signin'))->name('signin');
Route::get('/dashboard/authentication/signup', fn() => view('coba.authentication.signup'))->name('signup');