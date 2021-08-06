<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BorrowingBook;
use App\Models\Type;
use App\Http\Requests\BookRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\Book as BookResource;
use Illuminate\Support\Facades\File;

use GuzzleHttp\Client;
use mysqli;
use SplQueue;

use function GuzzleHttp\Promise\queue;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api', 'check-role'], ['only' => ['store', 'update', 'destroy']]);
        // $this->middleware('check-role', ['only' => ['index']]);

    }

    public function index(BookRequest $request)
    {
        //$limit = 10;
        // $books = Book::filter($request->all());
        // if ($request->has('limit') && $request->get('limit') != '') {
        //     $limit = $request->get('limit');
        //     $books = $books->limit($limit);
        // }
        // $books = $books->get();
        // $types = Type::all();

        // return $books;
        $_type = Type::where('type_id', $request->type_id)->first();
        $types = Type::all();
        $queue = new SplQueue();
        $arr = [];
        array_push($arr, $_type);
        $queue->enqueue($_type->type_id);
        while($queue != null){
            $_type = $queue->dequeue();
            foreach($types as $type){
                if ($type->parent_id == $_type->id){
                    $queue->enqueue($type);
                    array_push($arr, $type);
                }    
            }
        }
        $result = [];
        foreach($arr as $element){
            if ($element->level == 3){
                array_push($result, $element);
            }
        }
        return $result;
    }

    public function store(BookRequest $request)
    {
        $urlBookImage = 'https://i.ibb.co/rdhND5D/image-book.png';
        if ($request->hasFile('book_image')) {
            $file = $request->book_image;
            $urlFile = $file->getRealPath();
            $arrImage = $this->uploadImage($urlFile);

            if ($arrImage['status'] == 'ok') {
                $urlBookImage = $arrImage['url'];
            }
        } else {
            // echo 'loi';
        }

        $books = Book::create(array_merge(
            $request->except('book_image'),
            ['book_image' => $urlBookImage]
        ));
        // $book = Book::firstOrCreate($request->all());
        // $db = $book->push;
        // Book::filter($request->input('isbn'))->get();
        // $types = Type::all();
        // foreach ($books as $book) {
        //     $type = $this->getTypeOfBook($book, $types);
        //     $book->type = $type;
        // }
        return response()->json([
            'book' => $books,
            // 're' => $request->all()
        ], 200);
    }


    public function show($id)
    {
        $book = Book::where('book_id', $id)->first();
        $types = Type::all();
        $type = $this->getTypeOfBook($book, $types);
        $book->type = $type;

        return $book;
    }

    public function update(BookRequest $request, $id)
    {

        $book = false;
        if ($request->hasFile('book_image')) {
            $file = $request->book_image;
            $urlFile = $file->getRealPath();
            $arrImage = $this->uploadImage($urlFile);
            // echo $urlFile;
            if ($arrImage['status'] == 'ok') {
                $urlBookImage = $arrImage['url'];

                $book = Book::where('book_id', $id)
                    ->update(
                        array_merge($request->only(
                            'name_book',
                            'type_id',
                            'author',
                            'translator',
                            'publisher',
                            'publication_date',
                            'price',
                            'isbn',
                            'review',
                            'book_image'
                        ), ['book_image' => $urlBookImage])

                    );
            }
        } else {
            $book = Book::where('book_id', $id)
                ->update(
                    $request->only(
                        'name_book',
                        'type_id',
                        'author',
                        'translator',
                        'publisher',
                        'publication_date',
                        'price',
                        'isbn',
                        'review',
                        'book_image'
                    )
                );
        }

        if (!$book) {
            return response()->json([
                'messenger' => "Cập nhật sách thất bại",
                // 'request' =>$request->all()
            ], 400);
        }
        return response()->json([
            'messenger' => "Cập nhật sách thành công",
            // 'request' => $request->all()
        ], 200);
    }



    public function destroy($id)
    {
        $countBook = Book::where('book_id', $id)->count();
        if ($countBook == 0) {
            return response()->json([
                'messenger' => 'Sách không tồn tại'
            ], 400);
        }

        // $types = Type::all();
        // $type = $this->getTypeOfBook($book, $types);
        // $book->type = $type;

        return response()->json([
            'messenger' => 'Xoá sách thành công'
        ], 200);
    }


    // lấy sách phát hành theo ngày mới nhất
    public function getLatestBooks(Request $request)
    {
        $limit = 10;
        if ($request->has('limit')) {
            $limit = $request->get('limit');
        }

        $books = Book::filter($request->all())->limit($limit)->get();
        $books = $books->sortBy('created_at');

        // $types = Type::all();
        // foreach ($books as $book) {
        //     $type = $this->getTypeOfBook($book, $types);
        //     $book->type = $type;
        // }

        return response()->json([
            'books'=>$books],
            200
        );
    }


    // lấy list book đc mượn nhiều nhất
    public function topBorrowing(Request $request)
    {
        $limit = 10;
        if ($request->has('limit')) {
            $limit = $request->get('limit');
        }
        $books = BorrowingBook::select(BorrowingBook::raw('COUNT(borrowing_books.book_id) as count, borrowing_books.book_id'))
            ->groupBy('borrowing_books.book_id')
            ->orderByDesc('count')
            ->limit($limit)->get();
        return response()->json(
            [
                'orderBy' => 'desc',
                "books" => $books,
            ],
            200
        );
    }

    public function getTypeOfBook($book, $types)
    {
        $type3 = $types->find($book->type_id);
        $type2 = $types->where('code', intdiv($type3->code, 10) * 10)->first();
        $type1 = $types->where(intdiv($type3->code, 100) * 100)->first();
        $type = (object) [];
        if ($type3->code % 100 == 0) {
            $type->level_1 = $type3;
        } elseif ($type3->code % 10 == 0) {
            $type->level_1 = $type2;
            $type->level_2 = $type3;
        } else {
            $type->level_1 = $type1;
            $type->level_2 = $type2;
            $type->level_3 = $type3;
        }
        return $type;
    }

    public function uploadImage($urlFile)
    {
        //....Clases and functions ...

        $url = "https://api.imgbb.com/1/upload";
        // $file = file_get_contents('C:\Users\Truongnam\Downloads\_MCR0003.jpg');
        $file = file_get_contents($urlFile);

        $filebase64 =  base64_encode($file);

        $client = new Client();
        $res = $client->request('POST', $url, [
            'header' => ['user', 'pass'],
            'form_params' => [
                'key' => 'ba4b149d644934850a218ea3aa6ede0b',
                'image' => $filebase64,
            ]
        ]);
        // echo $res->getStatusCode();
        // "200"
        // echo $res->getHeader('content-type')[0];
        // 'application/json; charset=utf8'
        if ($res->getStatusCode() == 200) {
            if (File::exists($urlFile)) {
                File::delete($urlFile);
            } else {
                // dd('File does not exists.');
            }
            return [
                'status' => 'ok',
                'url' => json_decode($res->getBody())->data->url,
                // 'res' => $res->getBody()
            ];
        }

        return ['status' => 'error'];


        // echo json_encode($json);
        // {"type":"User"...'
    }

    public function filterByType(BookRequest $Request){
        $_type = Type::where('type_id', $Request->type_id);
        $types = Type::all();
        $queue = new SplQueue();
        $arr = [];
        array_push($arr, $_type);
        $queue->enqueue($_type->type_id);
        while($queue != null){
            $_type = $queue->dequeue();
            foreach($types as $type){
                if ($type->parent_id == $_type->id){
                    $queue->enqueue($type);
                    array_push($arr, $type);
                }    
            }
        }
        $result = [];
        foreach($arr as $element){
            if ($element->level == 3){
                array_push($result, $element);
            }
        }
        return $result;
    }
}