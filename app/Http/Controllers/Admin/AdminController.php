<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\User;
use App\Models\BugReport;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Cloudinary;
use Carbon\Carbon;

class AdminController extends Controller
{
    use LogsActivity;
    public function dashboard()
    {
        $totalPrograms = Program::count();
        $totalAdmins = User::whereIn('role', ['superadmin', 'admin'])->count();
        $recentPrograms = Program::latest()->take(5)->get();

        return view('admin.dashboard.dashboard', compact('totalPrograms', 'totalAdmins', 'recentPrograms'));
    }

    // Programs Management
    public function programs(Request $request)
    {
        $query = Program::query();
        
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('tujuan_program', 'like', '%' . $search . '%');
            });
        }
        
        $programs = $query->latest()->paginate(8);
        $categories = ['Academic & School Program', 'Quran & Islamic Studies Program', 'Language & Skill Program', 'Program Options'];
        $totalPrograms = Program::count();
        
        return view('admin.programs.index', compact('programs', 'categories', 'totalPrograms'));
    }

    public function showProgram(Program $program, $name = null)
    {
        $program->load('user');
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
        
        return view('admin.programs.create', compact('categories', 'modes', 'levels'));
    }

    public function storeProgram(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required',
            'name' => 'required|string|max:255',
            'mode' => 'required',
            'level' => 'required|string|max:100',
            'image' => 'required|image|max:10240',
            'tujuan_program' => 'required|string',
            'fokus_pembelajaran' => 'required|string',
            'manfaat_program' => 'required|string',
        ]);

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

        $validated['user_id'] = auth()->id();
        $program = Program::create($validated);
        
        // Log activity
        $this->logCreate('Program', $program->name);

        return redirect()->route('admin.programs')
            ->with('success', 'Program created successfully!');
    }

    public function editProgram(Program $program, $name = null)
    {
        $categories = ['Academic & School Program', 'Quran & Islamic Studies Program', 'Language & Skill Program', 'Program Options'];
        $modes = ['Online & Offline', 'Online', 'Offline'];
        $levels = ['Beginner', 'Intermediate', 'Advanced'];
        
        return view('admin.programs.edit', compact('program', 'categories', 'modes', 'levels'));
    }

    public function updateProgram(Request $request, Program $program)
    {
        $rules = [
            'category' => 'required|in:Academic & School Program,Quran & Islamic Studies Program,Language & Skill Program,Program Options',
            'name' => 'required|string|max:255',
            'mode' => 'required|in:Online & Offline,Online,Offline',
            'level' => 'required|string|max:100',
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
        
        // Deteksi field yang berubah sebelum update
        $changedFields = $this->detectChangedFields($program, $request);

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
        
        // Log activity dengan field yang berubah
        $this->logUpdate('Program', $program->name, $changedFields);

        return redirect()->route('admin.programs')
            ->with('success', 'Program updated successfully!');
    }

    public function destroyProgram(Program $program)
    {
        $programName = $program->name;
        $program->delete();
        
        // Log activity
        $this->logDelete('Program', $programName);

        return redirect()->route('admin.programs')
            ->with('success', 'Program deleted successfully!');
    }

    // Admin Management (Only for Superadmin)
    public function admins(Request $request)
    {
        // Only show admin role, exclude superadmin
        $admins = User::where('role', 'admin')->latest()->paginate(10);
        
        return view('admin.admins.index', compact('admins'));
    }

    public function createAdmin()
    {
        return view('admin.admins.create');
    }

    public function storeAdmin(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validated['password'] = \Hash::make($validated['password']);
        $validated['role'] = 'admin'; // Always create as admin

        User::create($validated);

        return redirect()->route('admin.admins')
            ->with('success', 'Admin berhasil ditambahkan!');
    }

    public function editAdmin(User $user)
    {
        return view('admin.admins.edit', compact('user'));
    }

    public function updateAdmin(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ];

        if ($request->filled('password')) {
            $rules['password'] = 'required|string|min:8|confirmed';
        }

        $validated = $request->validate($rules);

        if ($request->filled('password')) {
            $validated['password'] = \Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('admin.admins')
            ->with('success', 'Admin berhasil diupdate!');
    }

    public function destroyAdmin(User $user)
    {
        $adminName = $user->name;
        $user->delete();

        return redirect()->route('admin.admins')
            ->with('success', $adminName . ' berhasil dihapus!');
    }

    public function bulkDestroyAdmins(Request $request)
    {
        $ids = json_decode($request->ids);
        
        if (empty($ids)) {
            return redirect()->route('admin.admins')
                ->with('error', 'No admins selected for deletion');
        }

        // Get admin names before deletion
        $admins = User::whereIn('id', $ids)->where('role', 'admin')->get();
        
        // Delete admins
        User::whereIn('id', $ids)->where('role', 'admin')->delete();

        // Create success message
        if (count($admins) === 1) {
            $message = $admins->first()->name . ' berhasil dihapus!';
        } else {
            $message = count($admins) . ' admin(s) berhasil dihapus!';
        }

        return redirect()->route('admin.admins')
            ->with('success', $message);
    }

    // Changelog (Only for Superadmin)
    public function changelog(Request $request)
    {
        $query = BugReport::with('user');
        
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        $bugReports = $query->latest()->paginate(10);
        
        // Mark all unread bug reports as read when superadmin opens changelog
        BugReport::where('is_read', false)->update(['is_read' => true]);
        
        return view('admin.changelog', compact('bugReports'));
    }
}
