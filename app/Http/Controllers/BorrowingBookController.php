<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowingBookController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function store()
    {
        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function checkBorrowing($id)
    {
        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function returnBook($id)
    {
        return response()->json([
            'status' => 'ok'
        ]);
    }
}
