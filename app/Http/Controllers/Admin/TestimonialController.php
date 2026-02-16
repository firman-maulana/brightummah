<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $postedTestimonials = Testimonial::where('status', 'posted')->latest()->get();
        $latestTestimonials = Testimonial::where('status', 'latest')->latest()->get();

        return view('admin.testimonials.index', compact('postedTestimonials', 'latestTestimonials'));
    }

    public function approve(Testimonial $testimonial)
    {
        return view('admin.testimonials.addphoto', compact('testimonial'));
    }

    public function post(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $validated['photo'] = $request->file('photo')->store('testimonials', 'public');

        $testimonial->update([
            'photo' => $validated['photo'],
            'date' => now()->toDateString(),
            'status' => 'posted',
        ]);

        return redirect()->route('admin.testimonials.index');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index');
    }
}
