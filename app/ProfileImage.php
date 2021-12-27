<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileImage extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'profile_id' => 'required',
        'image_path' => 'required',
    );
}
