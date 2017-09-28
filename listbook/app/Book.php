<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
      'title','description','author_id'
    ];

    public function author() {
      return $this->belongsTo('App\User','author_id');
    }
}
