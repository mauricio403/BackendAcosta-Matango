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

// Route ::get('cod',function(){
//     return ['AK117, Pharo, Shorty'];
// });
// Route ::get('cod{id}',function(){
//     return ['Shorty'];
// });
// Route ::post('cod',function(){
//     return 'agregado 202!';
// });
// Route ::put('cod/{id}',function(){
//     return 'update succesfull 202!';
// });
// Route ::delete('cod',function(){
//     return "Delete succesfull";
// });

Route::apiResource('cod/{gun}/shorty',CodController::class);

Route::apiResource('cod/{guns}/shorty',CodController::class);

Route::prefix('cod/{gun}/shorty/{id}')->group(function () {
   Route::patch('state',[CodController::class,'updateState']);
});

