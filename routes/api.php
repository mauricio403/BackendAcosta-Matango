<?php

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('projects',function (){
    return 'Obtenido 202';
 });

Route::post('projects',function (){
    return "Creado 202";
 });
Route::put('projects',function (){
    return 'Actualizado 202';
 });
Route::delete('projects',function (){
    return 'Eliminado 202';
 });

