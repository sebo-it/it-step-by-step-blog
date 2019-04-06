<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = FALSE;
    protected $table = 'categories';
    
    public function posts() {
        return $this->hasMany('App\Post');
    }
 
}
