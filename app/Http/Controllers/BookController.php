<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowingBook;
use App\Models\Type;
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
        $books = Book::filter($request->all())->get();
        $types = Type::all();
        foreach($books as $book){
            $type = $this->getTypeOfBook($book, $types);
            $book->type = $type;
        }
        return $books;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {

        $books = Book::create($request->all());
        // $book = Book::firstOrCreate($request->all());
        // $db = $book->push;
        // Book::filter($request->input('isbn'))->get();
        $types = Type::all();
        foreach($books as $book){
            $type = $this->getTypeOfBook($book, $types);
            $book->type = $type;
        }
        return $books;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::where('book_id', $id)->first();
        $types = Type::all();
        $type = $this->getTypeOfBook($book, $types);
        $book->type = $type;
        
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request)
    {
        $url_file = $request->file('book_image')->getRealPath();
        $duoi =  $request->file('book_image')->getClientOriginalExtension();
        $name_file = $request->file('book_image')->getClientOriginalName();

        $book = Book::where('book_id', $request->book_id)
            ->update(
                $request->except('book_image')
                // ['name_book' => 'sách bị đổi tên']
            );
        return $book;
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
        $types = Type::all();
        $type = $this->getTypeOfBook($book, $types);
        $book->type = $type;
        return $book;
    }


    // lấy sách phát hành theo ngày mới nhất
    public function getLatestBooks(Request $request)
    {
        $books = Book::filter($request->all())->get();
        $books = $books->sortBy('created_at');
        $types = Type::all();
        foreach($books as $book){
            $type = $this->getTypeOfBook($book, $types);
            $book->type = $type;
        }
        return $books;
    }


    // lấy list book đc mượn nhiều nhất
    public function topBorrowing(Request $request)
    {
        $books = BorrowingBook::select(BorrowingBook::raw('COUNT(borrowing_books.book_id) as count, borrowing_books.book_id'))
                ->groupBy('borrowing_books.book_id')
                ->orderBy('count')
                ->get();
        return $books;
    }

    public function getTypeOfBook($book, $types)
    {
        $type3 = $types->find($book->type_id);
        $type2 = $types->where('code', intdiv ($type3->code, 10) * 10)->first();
        $type1 = $types->where(intdiv($type3->code, 100) * 100)->first();
        $type = (object) [];
        if ($type3->code % 100 == 0){
            $type->level_1 = $type3;
        }
        elseif ($type3->code % 10 == 0){
            $type->level_1 = $type2;
            $type->level_2 = $type3;
        }
        else {
            $type->level_1 = $type1;
            $type->level_2 = $type2;
            $type->level_3 = $type3;
        }
        return $type;
    }
}