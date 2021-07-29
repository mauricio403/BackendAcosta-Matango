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

Route ::get('authors',function(){
    return ['AK117, Pharo, Shorty'];
});
Route ::get('authors{id}',function(){
    return ['Shorty'];
});
Route ::post('authors',function(){
    return 'agregado 202!';
});
Route ::put('authors/{id}',function(){
    return 'update succesfull 202!';
});
Route ::delete('authors',function(){
    return "Delete succesfull";
});

