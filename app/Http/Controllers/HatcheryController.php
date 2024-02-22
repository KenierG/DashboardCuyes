<?php

namespace App\Http\Controllers;

use App\Models\hatchery;
use Illuminate\Http\Request;

class HatcheryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', [
            'Hatchery' => Hatchery::all()
        ]);

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
    public function show(hatchery $hatchery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hatchery $hatchery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hatchery $hatchery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hatchery $hatchery)
    {
        //
    }
}
