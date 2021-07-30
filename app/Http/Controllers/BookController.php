<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Book::filter($request->all())->join('types', 'types.type_id', '=', 'books.type_id')
        ->select()->get();
    }
    public function list(Request $request){
        // if($request->name_type == null) {
        //     $request->name_type = defaults;
        // }
        // return $request->name_type;
        $requestData = $request->all();
        if($request->name_type == null) {
            $requestData['name_type'] = 'default';
        }

        $total_price=Book::filter($requestData)->sum('price');
        $list=Book::filter($requestData)->get();
        return response()->json(['list' => $list, 'total' => $total_price]);
    }

    public function get_latest_book(){
        return Book::orderBy('publishing_year', 'DESC')->skip(0)->take(10)->get();
    }

    public function create(Request $request) {
        $request->validate([
            'name_book' => 'required',
            'type_id' => 'required',
            'price' => 'required',
        ]);

        Book::create($request->all());

        return 'store complete';
    }

    public function update(Request $request) {
        $requestData = $request->all();
        if($request->author == null) {
            $requestData['author'] = 'unknown';
        } 
        if($request->translator == null) {
            $requestData['translator'] = 'unknown';
        }
        if($request->review == null) {
            $requestData['review'] = 'no review';
        }
        if($request->image_link == null) {
            $requestData['image_link'] = 'no image';
        }

        DB::table('books')->where('book_id', '=', $request->book_id)->update([
            'name_book' => $requestData['name_book'],
            'type_id' => $requestData['type_id'],
            'author' => $requestData['author'],
            'translator' => $requestData['translator'],
            'price' => $requestData['price'],
            'review' => $requestData['review'],
        ]);

        return 'update complete';
    }

    public function delete(Request $request) {
        DB::table('books')->where('book_id', '=', $request->book_id)->delete();

        return 'delete complete';
    }
}