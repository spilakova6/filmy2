<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kino extends Model
{
    public function articles()
    {
        return $this->hasMany(Article::class);
    }


    public $timestamps = false;
}
