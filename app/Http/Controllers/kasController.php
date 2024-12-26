<?php

namespace App\Http\Controllers;

use App\Models\kas;
use Illuminate\Http\Request;
use Illuminate\View\View;


class kasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kass = kas::all();
        return view('manajemenkas', ['kass' => $kass]);
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
    public function show(kas $kas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kas $kas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kas $kas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kas $kas)
    {
        //
    }
}
