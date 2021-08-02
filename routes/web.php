<?php

use App\Http\Controllers\BooksController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// //Mauricio


// //metodo index
// Route::get('authors/{author}/books', function () {
//     $books = ['100 años de soledad', 'historia para tontos', 'La odisea'];
//     return response()->json(
//         [
//             'data' => $books,
//             'msg' => [
//                 'sumary' => 'consulta correcta',
//                 'detail'=>'la consulta de libros fue correcta',
//                 'code'=> '200'
//             ]
//         ],
//         200
//     );
// });  // => muestra la lista de libros de un author

// //metodo show
// Route::get('authors/{author}/books/{book}', function () {
//     $book = '100 años de soledad';
//     return response()->json(
//         [
//             'data' => $book,
//             'msg' => [
//                 'sumary' => 'consulta correcta',
//                 'detail'=>'la consulta del libro fue correcta',
//                 'code'=> '200'
//             ]
//         ],
//         200
//     );
// });
// //metodo  store
// Route::post('authors/{author}/books', function () {
//     $book = 'historia para tontos';
//     return response()->json(
//         [
//             'data' => $book,
//             'msg' => [
//                 'sumary' => 'consulta correcta',
//                 'detail'=>'la operacion de libros fue correcta',
//                 'code'=> '201'
//             ]
//         ],
//         201
//     );
// });

// //metodo update 
// Route::put('authors/{author}/books/{book}', function () {
//     return response()->json(
//         [
//             'data' => null,
//             'msg' => [
//                 'sumary' => 'consulta correcta',
//                 'detail'=>'la actualizacion de libros fue correcta',
//                 'code'=> '201'
//             ]
//         ],
//         201
//     );
// });

// //metodo destroy
// Route::delete('authors/{author}/books/{book}', function () {
//      $book = 'La odisea';
//     return response()->json(
//         [
//             'data' => $book,
//             'msg' => [
//                 'sumary' => 'consulta correcta',
//                 'detail'=>'eliminado de libros fue correcta',
//                 'code'=> '201'
//             ]
//         ],
//         201
//     );
// });


Route::apiResource('books', BooksController::class);

//esto sirve para agregar funcionalidades deiferentes a un crud

Route::prefix('book')->group(function () {
    Route::prefix('{book}')->group(function () {
        Route::patch('state', [BooksController::class, 'updateState']);
    });
    Route::group(function () {
        Route::patch('state', [BooksController::class, 'updateState']);
    });
});

// //paola

// Route::get('flowers/{flower}/roses', function () {
//     return ['rosa', 'girasol'];
// });

// Route::get('flowers/{flower}/flores/{rose}', function () {
//     return ['Trébol amarillo', 'Lirio '];
// });

// Route::post('flowers/{flower}/roses', function () {
//     return 'realizado';
// });

// Route::put('flowers/{flower}/flores/{rose}', function () {
//     return '<-----Actualizado';
// });

// Route::delete('flowers/{flower}/flores/{rose}', function () {
//     return 'Eliminado......';
// });
