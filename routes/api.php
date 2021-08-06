<?php

use App\Models;
use App\Models\Book;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BorrowingBookController;

// use App\Http\Controllers\CommentController;

use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\TypeController;

// use App\Http\Controllers\CartController;


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



    //borrowing-book
    Route::prefix('borrowing-book')->group(function () {
        Route::get('check-borrowing/{id}', [BorrowingBookController::class, 'checkBorrowing']);
    });


    //admin
    Route::middleware(['auth', 'check-role'])->prefix('manage')->group(function () {
        Route::get('get-user', [ManageUserController::class, 'getUser']);
        Route::get('get-borrowing', [ManageUserController::class, 'getBorrowing']);
        
        Route::prefix('borrowing-book')->group(function () {
            Route::get('/', [BorrowingBookController::class, 'index']);
            Route::post('/', [BorrowingBookController::class, 'store']);
            Route::get('return-book/{borrowing_book_id}', [BorrowingBookController::class, 'returnBook']);
        });
    });

    Route::get('type', [TypeController::class, 'index']);
});
