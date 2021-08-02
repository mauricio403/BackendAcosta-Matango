<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors = ['Julio Verne', 'Isaac Asimov', 'El pepe'];
        return response()->json(
            [
                'data' => $authors,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta de autores fue correcta',
                    'code' => '200'
                ]
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $author = 'Isaac Asimov';
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la operacion de autorres fue correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $author = 'el pepe';
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta del author fue correcta',
                    'code' => '200'
                ]
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la actualizacion del author fue correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $author = 'sr Red';
        return response()->json(
            [
                'data' => $author,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'eliminado de autor fue correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
