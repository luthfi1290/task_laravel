<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['user_id','title','path'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
