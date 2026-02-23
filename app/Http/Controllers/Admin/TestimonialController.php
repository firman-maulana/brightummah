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
            'name' => 'required|string|max:255',
            'institute' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'message' => 'required|string',
            'photo' => $testimonial->photo ? 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240' : 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        // Cek apakah ini approve (menambahkan photo pertama kali) atau edit photo
        $isFirstTimeApprove = !$testimonial->photo;

        // Handle photo upload jika ada file baru
        if ($request->hasFile('photo')) {
            if ($testimonial->photo) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $validated['photo'] = $request->file('photo')->store('testimonials', 'public');
        }

        $testimonial->update([
            'name' => $validated['name'],
            'institute' => $validated['institute'],
            'country' => $validated['country'],
            'message' => $validated['message'],
            'photo' => $validated['photo'] ?? $testimonial->photo,
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
