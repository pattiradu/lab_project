<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labs = Lab::all();

        return view('lab.lab1',["labs"=>$labs]);
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

        // Validate the request data
        $validatedData = $request->validate([
            'pcname' => 'required',
            'pcserial_number' => 'required',
            'pc_lab' => 'required',
            'pc_status' => 'required',
        ]);

        // Create a new lab

        $lab = new Lab();

        $lab->pcname = $request->input('pcname');
        $lab->pcserial_number = $request->input('pcserial_number');
        $lab->pc_lab = $request->input('pc_lab');
        $lab->pc_status = $request->input('pc_status');

        // Save the lab
        $lab->save();

        // Redirect or perform any additional actions
        // For example, redirect back to the form with a success message
        return redirect()->back()->with('success', 'PC added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
