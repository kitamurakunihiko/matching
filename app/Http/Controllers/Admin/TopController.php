<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileImage;

class TopController extends Controller
{
    //
    // public function display(Request $request) 
    // {
    //   // $profile = Profile::find($request->id);
    //   // $profile_image = ProfileImage::find($request->profile_id);
      
    //   // if (isset($profile)) {
    //   //   return view('admin/top', ['profile_form' => $profile], ['profile_form' => $profile_image]);
    //   // } else {
    //   //     return view('admin/profile/create');
    //   // }
    // }
    
    public function display() 
    {
      return view('admin/top');
    }
}
