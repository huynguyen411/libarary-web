<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingBook extends Model
{
    use Filterable;
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


    public $timestamps = false;
    protected $fillable = [
        'borrowing_book_id', 'book_id', 'user_id', 'from_date', 'to_date', 'promissory_date'
    ];
}
