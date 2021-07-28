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

/*Route ::get('flowers/{flower}/roses',function(){
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
});*/

Route::apiResource('flowers/{flower}/rose',FlowersControllers::class);

Route::prefix('flower/{flower}/rose/{rose}')->group(function () {
   Route::patch('state',[FlowersControllers::class,'updateState']);
}
);