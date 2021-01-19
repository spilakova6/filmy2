<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function kino()
    {
        return $this->belongsTo(Kino::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;
}
