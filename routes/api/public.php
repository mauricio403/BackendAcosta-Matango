<?php

use Illuminate\Http\Request;
use App\Http\Controllers\FlowersControllers;
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

// Route ::get('books/{book}/book',function(){
//         return['rosa','girasol'];
    
// });

// Route ::get('books/{book}/books/{book}',function(){
//     return ['Trébol amarillo','Lirio '];
// });

// Route ::post('books/{book}/book',function(){
//     return 'realizado';
// });

// Route ::put('books/{book}/books/{book}',function(){
//     return '<-----Actualizado';
// });

// Route ::delete('books/{books}/books/{book}',function(){
//     return 'Eliminado......';
// });

// Route::apiResource('books/{book}/book',FlowersControllers::class);

// Route::prefix('book/{book}/book/{book}')->group(function () {
//    Route::patch('state',[FlowersControllers::class,'updateState']);
// }
// );