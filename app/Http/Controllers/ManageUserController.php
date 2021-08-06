<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowingBook;
use App\Models\User;
use DateTime;

class ManageUserController extends Controller
{
    public function getUser(Request $request)
    {   
        return User::filter($request->all())->get();    
    }

    public function getBorrowing(Request $request)
    {   
        return BorrowingBook::filter($request->all())->get();
    }
}
