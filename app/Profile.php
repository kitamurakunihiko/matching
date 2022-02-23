<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'nickname' => 'required',
        'age' => 'required',
        'gender' => 'required',
        'occupation' => 'required',
        'prefectures' => 'required',
        'alcohol' => 'required',
        'count' => 'required',
        'introduction' => 'required',
    );
    
    public function profile_images()
    {
        return $this->hasMany('App\ProfileImage');

    }
    
    public function swipes()
    {
        return $this->hasMany('App\Swipe');

    }
    
    public function user()
    {
        return $this->belongsTo('App\Profile');

    }
    
    public static function candidate_user($profile)
    {
      $query = Profile::query();
      //既にswipeしたidを取得(plunkで配列で取得)
      $swiped_users = Swipe::where('from_user_id', $profile->id)->get()->pluck('to_user_id');
      //自分以外のswipeしていないidを取得
      if (!empty($swiped_users)) {
        $query->where('id', '<>', $profile->id)->whereNotin('id', $swiped_users);
      }
      //自分と逆の性別のデータを取得
      if ($profile->gender == '0') {
        $query->where('gender', '=', '1');
      } elseif ($profile->gender == '1') {
        $query->where('gender', '=', '0');
      }
      //自分と同じ都道府県のデータを取得
      if (isset($profile->prefectures)) {
        $query->where('prefectures', '=', $profile->prefectures);
      }
      
      $candidate_user = $query->first();
      
      return $candidate_user;
    }
    
}
