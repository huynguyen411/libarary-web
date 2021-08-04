<?php

use App\Models;
use App\Models\Book;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorrowingBookController;
use App\Http\Controllers\CommentController;

// use App\Http\Controllers\BookController;



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
    Route::group([
        'middleware' => 'api',
        'prefix' => 'auth'

    ], function ($router) {
        Route::post('/login', [AuthController::class, 'login'])->name('login');
        Route::get('login', function () {
            return response()->json(
                ['error' => 'Unauthorized'],
                401
            );
        });
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::post('/refresh-token', [AuthController::class, 'refresh']);
        Route::get('/user-profile', [AuthController::class, 'userProfile']);
        Route::post('/change-password', [AuthController::class, 'changePassword']);
    });

    //route book
    Route::prefix('book')->group(function () {
    Route::post('/{book}', [App\Http\Controllers\BookController::class, 'update']);
        Route::get('/top-borrowing', [App\Http\Controllers\BookController::class, 'topBorrowing']);
        Route::get('/get-latest-books', [App\Http\Controllers\BookController::class, 'getLatestBooks']);
    });
    Route::apiResource('book', BookController::class);



    //route borrowing-book
    Route::prefix('borrowing-book')->group(function () {
        Route::get('/', [BorrowingBookController::class, 'index']); // cua admin
        Route::post('/', [BorrowingBookController::class, 'store']);
        Route::post('/{id}', [BorrowingBookController::class, 'update']);
        Route::get('check/{id}', [BorrowingBookController::class, 'checkBorrowing']);
        Route::get('return-book/{id}', [BorrowingBookController::class, 'returnBook']);

    });

    Route::prefix('comment')->group(function () {
        Route::get('/', [CommentController::class, 'index']); 
        Route::post('/', [CommentController::class, 'store']);
        Route::get('/{id}', [CommentController::class, 'show']);
        Route::post('/{id}', [CommentController::class, 'update']);
        Route::delete('delete/{id}', [CommentController::class, 'destroy']);
    });
    
});


Route::prefix('test2')->group(function () {
    Route::get('model1', function () {
        $book = Book::select('name_book')->get();
    
        // print_r($book);
        return $book;
    });
    Route::get('model2', function () {
        // $type = Type::find(8);
        $books = Type::find(8)->books;
        return $books;
    });
    Route::get('model3', function () {
        // $type = Type::find(8);
        $type = Type::find(9);
        return response()->json([$type,  "hi" => 1]);
    });

});