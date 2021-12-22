<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    //
    public function display() 
    {
        return view('admin.top');
    }
    
    
    public function create(Request $request) 
    {
        if (isset($request->id)) {
          return view('admin.top');
        } else {
            return view('admin.profile.create');
        }
        
    }
}
