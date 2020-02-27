<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Genre;


class Author extends Model
{
    public function videos()  // we can get any video from an author through this
    {
        return $this->hasMany(Video::class);
    }

    public function genres()  //authors and genres are many to many
    {
        return $this->belongsToMany(Genre::class);
    }



}
