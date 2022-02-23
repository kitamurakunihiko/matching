<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Swipe extends Model
{
    //
    // use HasFactory;
    
    protected $fillable = [
        'from_user_id',
        'to_user_id',
        'is_like',
    ];
    
    public function profile()
    {
        return $this->belongsTo('App\Profile', 'to_user_id', 'id');

    }
    
    public static function matched_users($id)
    {
      //自分にいいねしたユーザーを取得
      $liked_users = Swipe::where('to_user_id', $id)
                       ->where('is_like', true)
                       ->pluck('from_user_id');
      
      //自分がいいねしたユーザーにいいねされていたユーザーを取得(マッチしているユーザー)
      $matched_users = Swipe::where('from_user_id', $id)
                           ->whereIn('to_user_id', $liked_users)
                           ->where('is_like', true)
                           ->with('profile')
                           ->get();
                           
      return $matched_users;
    }
    
}
