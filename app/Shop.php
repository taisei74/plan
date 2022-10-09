<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name',
                        'money', 
                        'time',
                        ];
                        
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
}
