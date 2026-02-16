<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialSubmissionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Testimonial::create([
            ...$validated,
            'status' => 'latest',
        ]);

        return redirect()->route('home');
    }
}
