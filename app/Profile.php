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
}
