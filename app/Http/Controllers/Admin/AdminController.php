<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Cloudinary;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalPrograms = Program::count();
        $totalUsers = User::count();
        $recentPrograms = Program::latest()->take(5)->get();

        return view('admin.dashboard.dashboard', compact('totalPrograms', 'totalUsers', 'recentPrograms'));
    }

    // Programs Management
    public function programs(Request $request)
    {
        $query = Program::query();
        
        // Filter by category
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        // Search by name or tujuan_program
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('tujuan_program', 'like', '%' . $search . '%');
            });
        }
        
        $programs = $query->latest()->paginate(8);
        
        // Get all unique categories for filter buttons
        $categories = ['Academic & School Program', 'Quran & Islamic Studies Program', 'Language & Skill Program', 'Program Options'];

        $totalPrograms = Program::count();
        
        return view('admin.programs.index', compact('programs', 'categories', 'totalPrograms'));
    }

    public function showProgram(Program $program)
    {
        // Get 1 random program excluding the current one
        $otherProgram = Program::where('id', '!=', $program->id)
            ->inRandomOrder()
            ->first();
        
        return view('admin.programs.detail', compact('program', 'otherProgram'));
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
        'category' => 'required',
        'name' => 'required|string|max:255',
        'mode' => 'required',
        'level' => 'required|string|max:100',
        'price' => 'required|numeric|min:0',
        'price_period' => 'required',
        'image' => 'required|image|max:10240',
        'teacher' => 'required|string|max:255',
        'tujuan_program' => 'required|string',
        'fokus_pembelajaran' => 'required|string',
        'manfaat_program' => 'required|string',
    ]);

    // ✅ INIT CLOUDINARY SDK
    $cloudinary = new Cloudinary([
        'cloud' => [
            'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
            'api_key'    => env('CLOUDINARY_API_KEY'),
            'api_secret' => env('CLOUDINARY_API_SECRET'),
        ],
    ]);

    // ✅ UPLOAD
    $upload = $cloudinary->uploadApi()->upload(
        $request->file('image')->getRealPath(),
        [
            'folder' => 'programs'
        ]
    );

    // ✅ SIMPAN URL
    $validated['image'] = $upload['secure_url'];

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

    $cloudinary = new Cloudinary([
        'cloud' => [
            'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
            'api_key'    => env('CLOUDINARY_API_KEY'),
            'api_secret' => env('CLOUDINARY_API_SECRET'),
        ],
    ]);

    $upload = $cloudinary->uploadApi()->upload(
        $request->file('image')->getRealPath(),
        ['folder' => 'programs']
    );

    $validated['image'] = $upload['secure_url'];
}


        $program->update($validated);

        return redirect()->route('admin.programs')
            ->with('success', 'Program updated successfully!');
    }

    public function destroyProgram(Program $program)
    {
        $program->delete();

        return redirect()->route('admin.programs')
            ->with('success', 'Program deleted successfully!');
    }

    // Users Management
     public function users(Request $request)
    {
        $filter = $request->get('filter', 2); // Default: Last Month (2)
        
        $query = User::query();
        
        // Apply time-based filter
        switch ($filter) {
            case 0: // Today
                $query->whereDate('created_at', Carbon::today());
                break;
            case 1: // Last 7 Days
                $query->where('created_at', '>=', Carbon::now()->subDays(7));
                break;
            case 2: // Last Month
                $query->where('created_at', '>=', Carbon::now()->subMonth());
                break;
            case 3: // Last 12 Months
                $query->where('created_at', '>=', Carbon::now()->subYear());
                break;
            case 4: // All Time
                // No filter needed
                break;
        }
        
        // Paginate with 10 items per page
        $users = $query->latest()->paginate(10);
        
        return view('admin.users.index', compact('users'));
    }

    public function bulkDestroy(Request $request)
{
    $request->validate([
        'user_ids' => 'required|array',
        'user_ids.*' => 'exists:users,id'
    ]);

    User::whereIn('id', $request->user_ids)->delete();

    return redirect()->back()->with('success', 'User berhasil dihapus');
}
}