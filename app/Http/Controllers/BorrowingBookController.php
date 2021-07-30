<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BorrowingBook;

class BorrowingBookController extends Controller
{
    public function list(){
        return BorrowingBook::all();
    }

    public function create(Request $request) {
        $request->validate([
            'book_id' => 'required', 
            'user_id' => 'required', 
            'from_date' => 'required', 
            'promissory_date' => 'required',
        ]);

        $array_book_id = $request->book_id;
        for ($i = 0; $i <count($array_book_id); $i++) {
            $borrowing_book = new BorrowingBook([
                'book_id'  => $array_book_id[$i],
                'user_id'  => $request->user_id,
                'from_date'  => $request->from_date,
                'promissory_date' => $request->promissory_date,
            ]);
            $borrowing_book->save();
        }

        return 'create complete';
    }

    public function returned_book(Request $request){
        DB::table('borrowing_books')->where('book_id', '=', $request->book_id)
                          ->where('user_id','=', $request->user_id)
                          ->whereNull('to_date')
        ->update([
            'to_date' => date('Y-m-d'),
        ]);

        return 'update complete';
    }

    public function get(Request $request){
        $data = DB::table('borrowing_books')->where('book_id', '=', $request->book_id)
                                            ->where('user_id','=', $request->user_id)
                                            ->orderBy('from_date', 'DESC')->take(1)->get();
        if ($data[0]->to_date === null) {
            return $data;
        } else {
            return null;
        }

    }

    public function get_favourites(){
        // return BorrowingBook::selectRaw('book_id, count(*) as count')->groupBy('book_id')->orderBy('count', 'DESC')->take(10)->get();
        return DB::table('borrowing_books')->selectRaw('count(*) as count, books.*')
                                    ->join('books','books.book_id','=','borrowing_books.book_id')
                                    ->groupBy('borrowing_books.book_id')->orderBy('count', 'DESC')->take(10)
                                    ->get();
    }

    public function list_returned_books(){
        return BorrowingBook::whereNotNull('to_date')->get();
    }

    public function list_borrowing_books(){
        return BorrowingBook::whereNull('to_date')->get();
    }
}
