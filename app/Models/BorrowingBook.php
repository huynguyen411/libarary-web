<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingBook extends Model
{
    use HasFactory;
    protected $table = 'borrowing_books';
    protected $primaryKey = 'borrowing_book_id';

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'book_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'borrower_id', 'book_id');
    }


}
