<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Swipe;

class MatchController extends Controller
{
    //
    public function index() 
    {
      //自分にいいねしたユーザーを取得
      $liked_users = Swipe::where('to_user_id', Auth::user()->profile->id)
                         ->where('is_like', true)
                         ->pluck('from_user_id');
      
      //自分がいいねしたユーザーにいいねされていたユーザーを取得(マッチしているユーザー)
      $matched_users = Swipe::where('from_user_id', Auth::user()->profile->id)
                           ->whereIn('to_user_id', $liked_users)
                           ->where('is_like', true)
                           ->with('profile')
                           ->get();
                           
      return view('admin.match.index', ['matched_users' => $matched_users]);  
    }
    
    public function chat() 
    {
      return view('admin.match.chat');    
    }
}      
