<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // grazina visa DB informacija apie atutoriu
    public function bookAuthor () {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
