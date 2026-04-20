<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $teachers = Teacher::latest()->take(4)->get();
        $postedTestimonials = Testimonial::where('status', 'posted')->latest()->take(6)->get();
        $articles = Article::with('user')->latest()->take(3)->get();
        
        return view('pages.home', compact('teachers', 'postedTestimonials', 'articles'));
    }
}