<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileImage;
use App\Swipe;

class CandidateController extends Controller
{
    //
    
    public function index()
    {
      
      $candidate_user = Profile::candidate_user(Auth::user()->profile);
      
      return view('admin/candidate/index', ['candidate_user' => $candidate_user]);
    }
    
    public function detail()
    {
      $candidate_user = Profile::candidate_user(Auth::user()->profile);
      return view('admin.candidate.detail',  ['candidate_user' => $candidate_user]);
    }
    
    
    public function swipe(Request $request)
    {
      $swipe = new Swipe;
      $form = $request->all();
      
      unset($form['_token']);
      
      $swipe->fill($form);
      $swipe->from_user_id = Auth::user()->profile->id;
      $swipe->save();
      
      // 自分がswipeした人からいいねが来ていたらmatch
      $isMatch = $request->input('is_like') &&
                  Swipe::where('from_user_id', $request->input('to_user_id'))
                    ->where('to_user_id', Auth::user()->profile->id)
                    ->where('is_like', true)
                    ->exists();
                    
      if ($isMatch) {
          return redirect('admin/candidate/index')->with('flash_message', 'マッチしました！');
      }
      
      
      return redirect('admin/candidate/index');
    }
    
}
