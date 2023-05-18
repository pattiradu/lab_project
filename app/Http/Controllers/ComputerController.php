<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labs = Lab::latest()->get();
        return view('lab.lab1',compact('labs'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $computer = Lab::where('id',$id)->get()[0];
        return view('lab.edit', compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        Lab::where('id',$id)->update([
            'pcname'=>$request->pcname,
            'pcserial_number'=>$request->pcserial_number, 
            'pc_lab'=>$request->pc_lab, 
            'pc_status'=>$request->pc_status
        ]);
        return redirect()->route('computer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Lab::where('id',$id)->delete();
        return redirect()->back()->with('success',"computer deleted!");
    }
}
