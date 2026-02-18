<?php

namespace App\Http\Controllers;

use App\Models\BugReport;
use Illuminate\Http\Request;

class BugReportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|in:Saran Fitur,Lapor Bug,Lainnya',
            'message' => 'required|string|max:1000',
        ]);

        BugReport::create([
            'user_id' => auth()->id(),
            'category' => $request->category,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim!');
    }
}
