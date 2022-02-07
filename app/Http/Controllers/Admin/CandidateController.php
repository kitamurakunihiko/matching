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
      
      $query = Profile::query();
      //既にswipeしたidを取得(plunkで配列で取得)
      $swiped_users = Swipe::where('from_user_id', Auth::user()->profile->id)->get()->pluck('to_user_id');
      //自分以外のswipeしていないidを取得(第2引数は配列)
      if (!empty($swiped_users)) {
        $query->where('id', '<>', Auth::user()->profile->id)->whereNotin('id', $swiped_users);
      }
      //自分と逆の性別のデータを取得
      if (Auth::user()->profile->gender == '0') {
        $query->where('gender', '=', '1');
      } elseif (Auth::user()->profile->gender == '1') {
        $query->where('gender', '=', '0');
      }
      //自分と同じ都道府県のデータを取得
      if (isset(Auth::user()->profile->prefectures)) {
        $query->where('prefectures', '=', Auth::user()->profile->prefectures);
      }
      
      $candidate_user = $query->first();
      
      return view('admin/candidate/index', ['candidate_user' => $candidate_user]);
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
