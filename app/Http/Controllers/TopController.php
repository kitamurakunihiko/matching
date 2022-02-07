<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function display() 
    {
        // $profile = Auth::user()->profile;
        // return view('top', ['profile' => $profile]);
        return view('top');
    }
    
}
