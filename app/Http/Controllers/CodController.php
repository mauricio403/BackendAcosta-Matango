<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodController extends Controller
{
    
    public function index()
    {
            $cods = ['Shorty','Peacekeeper','LK24'];
        return response()->json(
           ['data'=> $cods,
           'msg'=>['sumary'=> 'consulta sucessfull',
           'detail'=>'la consulta es exitosa 200', 
           'code'=>'201']], 201);
            return ['Shorty','Peacekeeper','LK24'];
        

    }
    public function store(Request $request)
    {
        
        return response()->json(
           ['data'=> null,
           'msg'=>['sumary'=> 'request succesfull',
           'detail'=>'la consulta es exitosa', 
           'code'=>'201']], 201);
        
    }

    public function show($cods)
    {
        $cod = 'Shorty';
        return response()->json(
           ['data'=> $cods,
           'msg'=>['sumary'=> 'request succesfull',
           'detail'=>'la consulta es exitosa', 
           'code'=>'201']], 201);
       
    }

    public function update(Request $request, $id)
    {
        
        return response()->json(
            ['data'=> null,
            'msg'=>['sumary'=> 'subida correcta',
            'detail'=>'la subida es correcta', 
            'code'=>'201']], 201);
         
    }

    public function destroy($id)
    {
        
        return response()->json(
            ['data'=> null,
            'msg'=>['sumary'=> 'elimnado item correcto',
            'detail'=>'delete sucessfull', 
            'code'=>'201']], 201);
         
}
public function updateState($id)
{
return response()->json(
    ['data'=> null,
    'msg'=>['sumary'=> 'actualizacion correcta',
    'detail'=>'la actualizacion es correcta', 
    'code'=>'201']], 201);

  }
}

