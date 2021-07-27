<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowingBook extends Model
{
    use HasFactory;
    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id', 'book_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'borrower_id', 'book_id');
    }


}
