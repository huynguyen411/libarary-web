<?php
use App\Models;
use App\Models\Book;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingBookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('v1')->group(function () {
    Route::resource('user', UsersController::class);
    Route::resource('type', TypeController::class);
    Route::resource('book', BookController::class);
});

Route::get('test', function (Request $request) {
    // return $request->get;
    // return dd($request);
    return $request->all();
});


Route::prefix('test2')->group(function () {
    Route::get('model1', 'BookController@index' 
        // $book = Book::filter($request->all())->get();;
    
        // // print_r($book);
        // return $book;
    );
    Route::get('model2', function () {
        // $type = Type::find(8);
        $books = Type::find(8)->books;
        return $books;
    });
});

Route::get('/type/index', [TypeController::class, 'index']);

Route::get('/book/list', [BookController::class, 'list']);

Route::get('book/get-latest-book', [BookController::class, 'get_latest_book']);

Route::post('book/create', [BookController::class, 'create']);

Route::post('/book/update', [BookController::class, 'update']);

Route::post('/book/delete', [BookController::class, 'delete']);

Route::get('/borrowing-book/get-favourites', [BorrowingBookController::class, 'get_favourites']);

Route::get('/borrowing-book/list', [BorrowingBookController::class, 'list']);

Route::get('/borrowing-book/create', [BorrowingBookController::class, 'create']);

Route::get('/borrowing-book/returned-book', [BorrowingBookController::class, 'returned_book']);

Route::get('/borrowing-book/get', [BorrowingBookController::class, 'get']);

Route::get('/borrowing-book/list-returned-books', [BorrowingBookController::class, 'list_returned_books']);

Route::get('/borrowing-book/list-borrowing-books', [BorrowingBookController::class, 'list_borrowing_books']);
