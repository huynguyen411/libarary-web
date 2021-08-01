<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;

class Book extends Model
{
    use HasFactory, Filterable;

    protected $table = "books";
    protected $primaryKey = 'book_id';
    protected $fillable = ['name_book', 'type_id', 'author', 'translator', 'publisher', 'publication_date', 'language', 'price', 'isbn', 'review', 'book_image'];

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

    public function language_book()
    {
        return $this->hasMany(LanguageBook::class, 'book_id','book_id');
    }


}
