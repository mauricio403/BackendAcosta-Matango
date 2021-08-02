<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodController;
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

//Mauricio



Route ::get('authors/{idAuthor}/books',function(){
    return ['100 años de soledad, historia para tontos, La odisea'];
});  // => muestra la lista de libros de un author


Route ::get('authors/{idAuthor}/books/{idBook}',function(){
    return ['El retrato de Dorian Gray'];
});
Route ::post('authors/{idAuthor}/books',function(){
    return 'Libro agregado 202! al usuario ';
});
Route ::put('authors/{idAuthor}/books/{idBook}',function(){
    return 'Book updated succesfull 202!';
});
Route ::delete('authors/{idAuthor}/books/{idBook}',function(){
    return "Delete succesfull";
});


//paola

Route ::get('flowers/{flower}/roses',function(){
        return['rosa','girasol'];
    
});

Route ::get('flowers/{flower}/flores/{rose}',function(){
    return ['Trébol amarillo','Lirio '];
});

Route ::post('flowers/{flower}/roses',function(){
    return 'realizado';
});

Route ::put('flowers/{flower}/flores/{rose}',function(){
    return '<-----Actualizado';
});

Route ::delete('flowers/{flower}/flores/{rose}',function(){
    return 'Eliminado......';
});
