<?php

namespace App\Http\Controllers;

use App\Models\tamu;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Catattamucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pencatatantamu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        return redirect()->intended(route('accountprofile', absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(tamu $tamu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tamu $tamu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tamu $tamu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tamu $tamu)
    {
        //
    }
}
