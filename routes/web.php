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
    Route::get('/programs/{program}', [AdminController::class, 'showProgram'])->name('programs.show');
    Route::get('/programs/{program}/edit', [AdminController::class, 'editProgram'])->name('programs.edit');
    Route::put('/programs/{program}', [AdminController::class, 'updateProgram'])->name('programs.update');
    Route::delete('/programs/{program}', [AdminController::class, 'destroyProgram'])->name('programs.destroy');
    
    Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::delete('/users/bulk-delete', [AdminController::class, 'bulkDestroy'])
    ->name('users.bulk-destroy');

    Route::get('/analytics', fn() => view('admin.dashboard.analytics'))->name('analytics');
    Route::get('/fintech', fn() => view('admin.dashboard.fintech'))->name('fintech');
    Route::get('/inbox', fn() => view('admin.inbox'))->name('inbox');
    Route::get('/messages', fn() => view('admin.messages'))->name('messages');
    Route::get('/calendar', fn() => view('admin.calendar'))->name('calendar');
    Route::get('/myaccount', fn() => view('admin.settings.account'))->name('account');
    Route::get('/notifications', fn() => view('admin.settings.notifications'))->name('notifications');
    Route::get('/feedback', fn() => view('admin.settings.feedback'))->name('feedback');
    Route::get('/changelog', fn() => view('admin.changelog'))->name('changelog');
    Route::get('/authentication/signin', fn() => view('admin.authentication.signin'))->name('signin');
    Route::get('/authentication/signup', fn() => view('admin.authentication.signup'))->name('signup');
});