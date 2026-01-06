<?php

namespace App\Http\Controllers;

use App\Models\jenjang;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenjangs = jenjang::all();
        return view('pages.programs', compact('jenjangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenjang = jenjang::findOrFail($id);
        return view('pages.detailprogram', compact('jenjang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jenjang $jenjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jenjang $jenjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jenjang $jenjang)
    {
        //
    }
}