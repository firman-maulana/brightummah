<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPrograms = Program::count();
        $totalUsers = User::count();
        $recentPrograms = Program::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPrograms', 'totalUsers', 'recentPrograms'));
    }

    // Programs Management
    public function programs()
{
    $programs = Program::latest()->get();
    return view('admin.programs.index', compact('programs'));
}


    public function createProgram()
    {
        $categories = ['Academic & School Program', 'Quran & Islamic Studies Program', 'Language & Skill Program', 'Program Options'];
        $modes = ['Online & Offline', 'Online', 'Offline'];
        $levels = ['Beginner', 'Intermediate', 'Advanced'];
        $pricePeriods = ['Per Day', 'Per Week', 'Per Month', 'Per Year'];
        
        return view('admin.programs.create', compact('categories', 'modes', 'levels', 'pricePeriods'));
    }

    public function storeProgram(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|in:Academic & School Program,Quran & Islamic Studies Program,Language & Skill Program,Program Options',
            'name' => 'required|string|max:255',
            'mode' => 'required|in:Online & Offline,Online,Offline',
            'level' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'price_period' => 'required|in:Per Day,Per Week,Per Month,Per Year',
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

    public function editProgram(Program $program)
    {
        $categories = ['Academic & School Program', 'Quran & Islamic Studies Program', 'Language & Skill Program', 'Program Options'];
        $modes = ['Online & Offline', 'Online', 'Offline'];
        $levels = ['Beginner', 'Intermediate', 'Advanced'];
        $pricePeriods = ['Per Day', 'Per Week', 'Per Month', 'Per Year'];
        
        return view('admin.programs.edit', compact('program', 'categories', 'modes', 'levels', 'pricePeriods'));
    }

    public function updateProgram(Request $request, Program $program)
{
    $rules = [
        'category' => 'required|in:Academic & School Program,Quran & Islamic Studies Program,Language & Skill Program,Program Options',
        'name' => 'required|string|max:255',
        'mode' => 'required|in:Online & Offline,Online,Offline',
        'level' => 'required|string|max:100',
        'price' => 'required|numeric|min:0',
        'price_period' => 'required|in:Per Day,Per Week,Per Month,Per Year',
        'teacher' => 'required|string|max:255',
        'tujuan_program' => 'required|string',
        'fokus_pembelajaran' => 'required|string',
        'manfaat_program' => 'required|string',
    ];

    if ($request->remove_image == 1) {
        $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:10240';
    } else {
        $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240';
    }

    $validated = $request->validate($rules);

    if ($request->hasFile('image')) {
        if ($program->image) {
            Storage::disk('public')->delete($program->image);
        }
        $validated['image'] = $request->file('image')->store('programs', 'public');
    }

    $program->update($validated);

    return redirect()->route('admin.programs')
        ->with('success', 'Program updated successfully!');
}

    public function destroyProgram(Program $program)
    {
        // Delete image if exists
        if ($program->image) {
            Storage::disk('public')->delete($program->image);
        }

        $program->delete();

        return redirect()->route('admin.programs')
            ->with('success', 'Program deleted successfully!');
    }

    // Users Management
    public function users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }
}