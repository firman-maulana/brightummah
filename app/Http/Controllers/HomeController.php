<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 4 program terbaru
        $latestPrograms = Program::latest()->take(4)->get();
        
        return view('pages.home', compact('latestPrograms'));
    }
}