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
    public function index()
{
    $programs = Program::latest()->get();

    return view('pages.programs', compact('programs'));
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
            'price' => 'required|numeric|min:0',
            'price_period' => 'required|string',
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
    public function show($id)
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
            'price' => 'required|numeric|min:0',
            'price_period' => 'required|string',
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