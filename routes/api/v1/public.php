<?php

use App\Http\Controllers\V1\AuthorController;
use App\Http\Controllers\V1\BookController;
use Illuminate\Http\Request;
// use App\Http\Controllers\FlowersControllers;
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


Route::apiResource('books', BookController::class);


//esto sirve para agregar funcionalidades deiferentes a un crud

Route::prefix('book')->group(function () {
    Route::prefix('{book}')->group(function () {
        Route::patch('state', [BookController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [BookController::class, 'updateState']);
    });
});



Route::apiResource('books.authors', AuthorController::class);

Route::prefix('book/{books}/authors')->group(function () {
    Route::prefix('{author}')->group(function () {
        Route::patch('state', [BookController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [BookController::class, 'updateState']);
    });
});