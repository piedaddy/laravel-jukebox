<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Video extends Model
{
    public function author()  // one author to many videos
    {
        return $this->belongsTo('App\Author'); //this will allow us to get an author from a video
        //if i use the App above:
            //return $this->belongsTo('Author::class');

    // now laravel can deduce which tables are involved and how they are related to each other 
    }

    public function genres() // many genres can belong to many authors 
    {
        return $this->belongsToMany(Genre::class);
    }

}
