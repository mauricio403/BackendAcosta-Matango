<?php

// use App\Http\Controllers\BooksController;

// use App\Http\Controllers\AuthorsController;
// use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::apiResource('books', BooksController::class);


// //esto sirve para agregar funcionalidades deiferentes a un crud

// Route::prefix('book')->group(function () {
//     Route::prefix('{book}')->group(function () {
//         Route::patch('state', [BooksController::class, 'updateState']);
//     });
//     Route::prefix('')->group(function () {
//         Route::patch('state', [BooksController::class, 'updateState']);
//     });
// });



// Route::apiResource('books.authors', AuthorsController::class);

// Route::prefix('book/{books}/authors')->group(function () {
//     Route::prefix('{author}')->group(function () {
//         Route::patch('state', [BooksController::class, 'updateState']);
//     });
//     Route::prefix('')->group(function () {
//         Route::patch('state', [BooksController::class, 'updateState']);
//     });
// });