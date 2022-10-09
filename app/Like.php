<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['shop_id','user_id'];
    
    public function shop()
    {
        return $tnis->belongsTo('App\Shop');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
