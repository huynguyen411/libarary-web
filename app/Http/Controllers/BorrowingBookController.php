<?php

namespace App\Http\Controllers;

use App\Models\BorrowingBook;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowingBookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['only' => ['store', 'checkBorrowing', 'returnBook', 'index']]);
    }

    public function index()
    {
        $payload = auth()->payload();
        $user_id = $payload->get('sub');

        $list = BorrowingBook::where('borrower_id', $user_id)->get();
        return response()->json([
            'status' => 'ok',
            'user_id' => $user_id,
            'data' => $list
        ]);
    }

    public function store(Request $request)
    {
        $payload = auth()->payload();
        $user_id = $payload->get('sub');

        $create_bb = BorrowingBook::create(array_merge(
            $request->except('status_id', 'borrower_id'),
            ['status_id' => 1, 'borrower_id' => $user_id]
        ));
        return response()->json([
            'status' => 'ok',
            'data' => $create_bb
        ]);
    }

    public function update(Request $request, $id)
    {
        return response()->json([
            'status' => 'ok',
        ]);
    }

    public function checkBorrowing($id)
    {
        $payload = auth()->payload();
        $user_id = $payload->get('sub');

        $checkBorrowing = BorrowingBook::where([
            ['borrower_id', '=', $user_id],
            ['status_id', '=', 1],
            ['book_id', '=', $id],
        ])->count();

        return response()->json([
            'status' => 'ok',
            'borrowing_quality' => $checkBorrowing,
            'user_id' => $user_id
        ]);
    }

    public function returnBook($id)
    {
        $payload = auth()->payload();
        $user_id = $payload->get('sub');

        $check = BorrowingBook::where([
            ['borrower_id','=', $user_id],
            ['borrowing_book_id', '=', $id]
            ]
            )->update(['status_id' => 2]);
        return response()->json([
            'status' => 'ok',
            'check' => $check
        ]);
    }
}
