<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookContent extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->belongsTo('App\Book', 'book_id', 'book_id');
    }
}
