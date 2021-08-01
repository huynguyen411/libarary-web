<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Book as BookResource;
class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['only' => ['store', 'update', 'destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $list = Book::filter($request->all())->get();
        return response()->json([
            'status' => 'ok',
            'data' => $list,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

        $db = Book::create($request->all());
        // $book = Book::firstOrCreate($request->all());
        // $db = $book->push;
        // Book::filter($request->input('isbn'))->get();
        return response()->json([
            'status' => 'ok',
            // 'data' => $db
            'request' => $request->all(),
            'data' => $db
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = Book::where('book_id', $id)->get();
        return response()->json([

            'status' => 'ok',
            'data' => $list
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url_file = $request->file('book_image')->getRealPath();
        $duoi =  $request->file('book_image')->getClientOriginalExtension();
        $name_file = $request->file('book_image')->getClientOriginalName();

        $book = Book::where('book_id', $id)
            ->update(
                $request->except('book_image')
                // ['name_book' => 'sách bị đổi tên']
            );
        return response()->json([
            'status' => 'ok',
            'message' => 'Cập nhật sách thành công',
            'data' => $book,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id)->delete();

        return response()->json([
            'status' => 'ok',
            'message' => 'Đã xoá sách thành công',
            'data' => $book
        ]);
    }


    // lấy sách phát hành theo ngày mới nhất
    public function getLatestBooks(Request $request)
    {
        $list = Book::filter($request->all())->get();
        return response()->json([
            'status' => 'ok',
            'data' => $list
        ]);
    }


    // lấy list book đc mượn nhiều nhất
    public function topBorrowing(Request $request)
    {
        $list = Book::filter($request->all())->get();
        return response()->json([
            'status' => '200',
            'data' => $list
        ]);
    }
}
