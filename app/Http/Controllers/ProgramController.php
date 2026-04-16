<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Program::query();
        
        // Handle search
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('tujuan_program', 'like', '%' . $search . '%')
                  ->orWhere('teacher', 'like', '%' . $search . '%');
            });
        }
        
        // Handle category filter
        if ($request->has('categories') && !empty($request->categories)) {
            $query->whereIn('category', $request->categories);
        }
        
        // Handle level filter
        if ($request->has('levels') && !empty($request->levels)) {
            $levels = $request->levels;
            $query->where(function($q) use ($levels) {
                foreach ($levels as $level) {
                    $q->orWhere('level', 'like', '%' . $level . '%');
                }
            });
        }
        
        $programs = $query->latest()->get();
        
        // Get counts for filters
        $categoryCounts = [
            'Academic & School Program' => Program::where('category', 'Academic & School Program')->count(),
            'Quran & Islamic Studies Program' => Program::where('category', 'Quran & Islamic Studies Program')->count(),
            'Language & Skill Program' => Program::where('category', 'Language & Skill Program')->count(),
            'Program Options' => Program::where('category', 'Program Options')->count(),
        ];
        
        $levelCounts = [
            'PAUD' => Program::where('level', 'like', '%PAUD%')->count(),
            'SD Kelas 1–3' => Program::where('level', 'like', '%SD Kelas 1–3%')->count(),
            'SD Kelas 4–6' => Program::where('level', 'like', '%SD Kelas 4–6%')->count(),
            'Beginner' => Program::where('level', 'like', '%Beginner%')->count(),
            'Medium' => Program::where('level', 'like', '%Medium%')->count(),
            'Jilid 1–4' => Program::where('level', 'like', '%Jilid 1–4%')->count(),
            'Jilid 5–Al-Qur\'an' => Program::where('level', 'like', '%Jilid 5–Al-Qur\'an%')->count(),
            'Juz 1, 2, dst' => Program::where('level', 'like', '%Juz 1, 2, dst%')->count(),
            'Juz 30, 29' => Program::where('level', 'like', '%Juz 30, 29%')->count(),
            'WNI di Luar Negeri' => Program::where('level', 'like', '%WNI di Luar Negeri%')->count(),
        ];

        return view('pages.programs', compact('programs', 'categoryCounts', 'levelCounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string|max:255',
            'mode' => 'required|string',
            'level' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'teacher' => 'required|string|max:255',
            'tujuan_program' => 'required|string',
            'fokus_pembelajaran' => 'required|string',
            'manfaat_program' => 'required|string'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('programs', 'public');
        }

        Program::create($validated);

        return redirect()->route('admin.programs')
            ->with('success', 'Program created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, $name = null)
{
    $program = Program::findOrFail($id);
    return view('pages.detailprogram', compact('program'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string|max:255',
            'mode' => 'required|string',
            'level' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'teacher' => 'required|string|max:255',
            'tujuan_program' => 'required|string',
            'fokus_pembelajaran' => 'required|string',
            'manfaat_program' => 'required|string'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($program->image) {
                Storage::disk('public')->delete($program->image);
            }
            $validated['image'] = $request->file('image')->store('programs', 'public');
        }

        $program->update($validated);

        return redirect()->route('admin.programs')
            ->with('success', 'Program updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Program $program)
    {
        // Delete image if exists
        if ($program->image) {
            Storage::disk('public')->delete($program->image);
        }

        $program->delete();

        return redirect()->route('admin.programs')
            ->with('success', 'Program deleted successfully!');
    }
}