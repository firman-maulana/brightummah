<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\Article;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
        
        // Share navbar data with all views
        View::composer('*', function ($view) {
            $view->with([
                'hasTeachers' => Teacher::exists(),
                'hasTestimonials' => Testimonial::where('status', 'posted')->exists(),
                'hasArticles' => Article::exists(),
            ]);
        });
    }
}
