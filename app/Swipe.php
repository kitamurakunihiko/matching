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
}
