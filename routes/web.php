<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('programs', ProgramController::class)->only(['index']);
Route::get('/valuebasedroutine', fn() => view('pages.valuebasedroutine'))->name('valuebasedroutine');
Route::get('/about', fn() => view('pages.about'))->name('about');
Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/faqs', fn() => view('pages.faq'))->name('faqs');
Route::resource('detailprogram', ProgramController::class)->only(['show']);

// Admin Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'showAdminLogin'])->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login.post');
});

// Default login route redirect to admin login (for Laravel's auth system)
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/programs', [AdminController::class, 'programs'])->name('programs');
    Route::get('/programs/create', [AdminController::class, 'createProgram'])->name('programs.create');
    Route::post('/programs', [AdminController::class, 'storeProgram'])->name('programs.store');
    Route::get('/programs/{program}', [AdminController::class, 'showProgram'])->name('programs.show');
    Route::get('/programs/{program}/edit', [AdminController::class, 'editProgram'])->name('programs.edit');
    Route::put('/programs/{program}', [AdminController::class, 'updateProgram'])->name('programs.update');
    Route::delete('/programs/{program}', [AdminController::class, 'destroyProgram'])->name('programs.destroy');
    
    // Admin Management (Only for Superadmin)
    Route::middleware('superadmin')->group(function () {
        Route::get('/admins', [AdminController::class, 'admins'])->name('admins');
        Route::get('/admins/create', [AdminController::class, 'createAdmin'])->name('admins.create');
        Route::post('/admins', [AdminController::class, 'storeAdmin'])->name('admins.store');
        Route::get('/admins/{user}/edit', [AdminController::class, 'editAdmin'])->name('admins.edit');
        Route::put('/admins/{user}', [AdminController::class, 'updateAdmin'])->name('admins.update');
        Route::delete('/admins/{user}', [AdminController::class, 'destroyAdmin'])->name('admins.destroy');
    });

    Route::get('/calendar', fn() => view('admin.calendar'))->name('calendar');
});

Route::get('/force-logout', function () { Auth::logout(); request()->session()->invalidate(); request()->session()->regenerateToken(); return redirect('/login'); })->name('force.logout');