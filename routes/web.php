<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialSubmissionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BugReportController;
use App\Http\Controllers\NotificationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/testimonials', [TestimonialSubmissionController::class, 'store'])->name('testimonials.store');
Route::resource('programs', ProgramController::class)->only(['index']);
Route::get('/valuebasedroutine', fn() => view('pages.valuebasedroutine'))->name('valuebasedroutine');
Route::get('/faqs', fn() => view('pages.faq'))->name('faqs');
Route::get('/detailprogram/{id}/{name}', [ProgramController::class, 'show'])->name('detailprogram.show');
Route::get('/detail_articles/{id}/{title}', [ArticleController::class, 'detail'])->name('articles.detail');
Route::post('/articles/{id}/like', [ArticleController::class, 'like'])->name('articles.like');

// Admin Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'showAdminLogin'])->name('admin.login');
    Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login.post');
});

// Default login route redirect to admin login (for Laravel's auth system)
Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/programs', [AdminController::class, 'programs'])->name('programs');
    Route::get('/programs/create', [AdminController::class, 'createProgram'])->name('programs.create');
    Route::post('/programs', [AdminController::class, 'storeProgram'])->name('programs.store');
    Route::get('/programs/{program}/{name}', [AdminController::class, 'showProgram'])->name('programs.show');
    Route::get('/programs/edit/{program}/{name}', [AdminController::class, 'editProgram'])->name('programs.edit');
    Route::put('/programs/{program}', [AdminController::class, 'updateProgram'])->name('programs.update');
    Route::delete('/programs/{program}', [AdminController::class, 'destroyProgram'])->name('programs.destroy');

    Route::delete('/teachers/bulk-destroy', [TeacherController::class, 'bulkDestroy'])->name('teachers.bulk-destroy');
    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/edit/{teacher}/{name}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
    Route::delete('/teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::get('/testimonials/approve/{testimonial}/{name}', [TestimonialController::class, 'approve'])->name('testimonials.approve');
    Route::post('/testimonials/{testimonial}/post', [TestimonialController::class, 'post'])->name('testimonials.post');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
    
    // Articles Management
    Route::get('/articles', [AdminArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [AdminArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [AdminArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}/{title}', [AdminArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/edit/{article}/{title}', [AdminArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}', [AdminArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}', [AdminArticleController::class, 'destroy'])->name('articles.destroy');
    
    // Bug Report (Admin Only)
    Route::post('/bug-reports', [BugReportController::class, 'store'])->name('bug-reports.store');
    
    // Notifications
    Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::post('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.readAll');
    Route::get('/notifications/unread-count', [NotificationController::class, 'getUnreadCount'])->name('notifications.unreadCount');
    
    // Admin Management (Only for Superadmin)
    Route::middleware('superadmin')->group(function () {
        Route::get('/admins', [AdminController::class, 'admins'])->name('admins');
        Route::get('/admins/create', [AdminController::class, 'createAdmin'])->name('admins.create');
        Route::post('/admins', [AdminController::class, 'storeAdmin'])->name('admins.store');
        Route::get('/admins/{user}/edit', [AdminController::class, 'editAdmin'])->name('admins.edit');
        Route::put('/admins/{user}', [AdminController::class, 'updateAdmin'])->name('admins.update');
        Route::delete('/admins/{user}', [AdminController::class, 'destroyAdmin'])->name('admins.destroy');
        Route::delete('/admins-bulk-delete', [AdminController::class, 'bulkDestroyAdmins'])->name('admins.bulk-delete');
    });
    
    // Changelog (Superadmin Only)
    Route::middleware('superadmin')->group(function () {
        Route::get('/changelog', [AdminController::class, 'changelog'])->name('changelog');
    });
});

Route::get('/force-logout', function () { Auth::logout(); request()->session()->invalidate(); request()->session()->regenerateToken(); return redirect('/login'); })->name('force.logout');