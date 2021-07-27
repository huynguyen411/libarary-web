<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function borrowing_books()
    {
        return $this->hasMany(BorrowingBook::class, 'borrower_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'borrower_id', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'comments');
    }
}
