<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 4 program terbaru
        $latestPrograms = Program::latest()->take(4)->get();

        $teachers = Teacher::latest()->take(4)->get();
        $postedTestimonials = Testimonial::where('status', 'posted')->latest()->take(6)->get();
        
        return view('pages.home', compact('latestPrograms', 'teachers', 'postedTestimonials'));
    }
}