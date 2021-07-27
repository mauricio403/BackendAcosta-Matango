<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlowersControllers extends Controller
{
    
    public function index()
    {
            $flowers = ['rosa','girasol','claveles'];
        return response()->json(
           ['data'=> $flowers,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'201']], 201);
            return ['rosa','girasol','claveles'];
        

    }
    public function store(Request $request)
    {
        
        return response()->json(
           ['data'=> null,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'201']], 201);
        
    }

    public function show($id)
    {
        $flower = 'girasol';
        return response()->json(
           ['data'=> $flower,
           'msg'=>['sumary'=> 'consulta correcta',
           'detail'=>'la consulta esta correcta', 
           'code'=>'201']], 201);
       
    }

    public function update(Request $request, $id)
    {
        
        return response()->json(
            ['data'=> null,
            'msg'=>['sumary'=> 'consulta correcta',
            'detail'=>'la consulta esta correcta', 
            'code'=>'201']], 201);
         
    }

    public function destroy($id)
    {
        
        return response()->json(
            ['data'=> null,
            'msg'=>['sumary'=> 'consulta correcta',
            'detail'=>'la consulta esta correcta', 
            'code'=>'201']], 201);
         
}
public function updateState($id)
{
return response()->json(
    ['data'=> null,
    'msg'=>['sumary'=> 'consulta correcta',
    'detail'=>'la consulta esta correcta', 
    'code'=>'201']], 201);

  }
}

