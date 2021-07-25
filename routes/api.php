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

Route ::get('floreria',function(){
    return ['rosa','girasol','claveles'];
});
Route ::get('floreria/{id}',function(){
    return ['flores'];
});
Route ::post('floreria',function(){
    return 'realizado';
});

Route ::put('floreria/{id}',function(){
    return '<-----Actualizado';
});

Route ::delete('floreria/',function(){
    return 'Eliminado......';
});
