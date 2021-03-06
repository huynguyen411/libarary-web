<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $primaryKey = 'book_id';

    public function comments()
    {
        return $this->hasMany(Comment::class, 'book_id', 'book_id');
    }

    public function book_content()
    {
        return $this->hasMany(BookContent::class, 'book_id', 'book_id');
    }

    public function borrowing_book()
    {
        return $this->hasMany(BorrowingBook::class, 'book_id', 'book_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'type_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'comments');
    }

}
