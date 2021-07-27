<?php
use App\Models;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('test2', function () {
    
});
