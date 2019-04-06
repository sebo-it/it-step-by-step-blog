<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }
    
    //relacja jeden do wielu, pomiedzy postem, a komentarzami
    public function comments() {
        return $this->hasMany('App\Comment');
    }    
    
    public function getCommentsQuantity()
    {
        return $this->comments->count();
    }
    
    //zwraca pierwsze $characters znaków
    public function getFirstPartOfContent($characters)
    {
        return substr($this->content, 0, $characters);
    }
}
