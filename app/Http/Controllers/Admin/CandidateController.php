<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileImage;

class CandidateController extends Controller
{
    //
    public function index()
    {
      // // $profile = Profile::find(35);
      // return view('admin.candidate.index', ['profile' => $profile]);
      return view('admin.candidate.index');
    }
}
