<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    use LogsActivity;
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

        // Cek apakah ini approve (menambahkan photo pertama kali) atau edit photo
        $isFirstTimeApprove = !$testimonial->photo;

        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $validated['photo'] = $request->file('photo')->store('testimonials', 'public');

        $testimonial->update([
            'photo' => $validated['photo'],
            'date' => now()->toDateString(),
            'status' => 'posted',
        ]);
        
        // Log activity berdasarkan kondisi
        if ($isFirstTimeApprove) {
            // Jika approve dari Latest Testimonials (menambahkan photo pertama kali)
            $this->logCreate('Testimonial', $testimonial->name);
        } else {
            // Jika edit photo dari Posted Testimonials
            $this->logUpdate('Testimonial', $testimonial->name, 'photo');
        }

        return redirect()->route('admin.testimonials.index');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonialName = $testimonial->name;
        
        if ($testimonial->photo) {
            Storage::disk('public')->delete($testimonial->photo);
        }

        $testimonial->delete();
        
        // Log activity
        $this->logDelete('Testimonial', $testimonialName);

        return redirect()->route('admin.testimonials.index');
    }
}
