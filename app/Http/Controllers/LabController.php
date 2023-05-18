<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    //

    public function lab1()
    {
        $labs = Lab::latest()->get();
        return view('lab.lab1',compact('labs'));
    }


    public function destroy(Lab $computer) {
        return dd($computer);
    }

}
