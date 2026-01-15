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
        $totalUsers = User::where('role', 'user')->count();
        $recentPrograms = Program::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('totalPrograms', 'totalUsers', 'recentPrograms'));
    }

    public function programs()
    {
        $programs = Program::latest()->paginate(10);
        return view('admin.programs.index', compact('programs'));
    }

    public function createProgram()
    {
        return view('admin.programs.create');
    }

    public function storeProgram(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mode' => 'required|in:Online,Onsite,Hybrid',
            'duration' => 'required|string|max:100',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
        ]);

        Program::create($validated);

        return redirect()->route('admin.programs')->with('success', 'Program created successfully!');
    }

    public function editProgram(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function updateProgram(Request $request, Program $program)
    {
        $validated = $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'mode' => 'required|in:Online,Onsite,Hybrid',
            'duration' => 'required|string|max:100',
            'level' => 'required|in:Beginner,Intermediate,Advanced',
        ]);

        $program->update($validated);

        return redirect()->route('admin.programs')->with('success', 'Program updated successfully!');
    }

    public function destroyProgram(Program $program)
    {

        $program->delete();

        return redirect()->route('admin.programs')->with('success', 'Program deleted successfully!');
    }

    public function users()
    {
        $users = User::where('role', 'user')->latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }
}