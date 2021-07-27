<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";

    public function comments()
    {
        return $this->hasMany(Comment::class, 'book_id', 'book_id');
    }

    public function bookContent()
    {
        return $this->hasMany(BookContent::class, 'book_id', 'book_id');
    }

    public function borrowingBook()
    {
        return $this->hasMany(BorrowingBook::class, 'book_id', 'book_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'type_id');
    }


    public function users()
    {
        return $this->belongsToMany('App\User', 'comments');
    }

}
