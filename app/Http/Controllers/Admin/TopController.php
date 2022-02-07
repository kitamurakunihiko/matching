<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileImage;
use App\Occupation;

class TopController extends Controller
{
    
    public function display() 
    {
      
      $profile = Auth::user()->profile;
      
      if (empty($profile->id)) {
          return view('admin.profile.create');  
        } else {
          return view('admin.top1', ['profile' => $profile]);
        }
    }
}
