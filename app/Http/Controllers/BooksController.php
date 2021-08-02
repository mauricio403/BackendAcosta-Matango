<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = ['100 años de soledad', 'historia para tontos', 'La odisea'];
        return response()->json(
            [
                'data' => $books,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta de libros fue correcta',
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
        $book = 'historia para tontos';
        return response()->json(
            [
                'data' => $book,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la operacion de libros fue correcta',
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
        $book = '100 años de soledad';
        return response()->json(
            [
                'data' => $book,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta del libro fue correcta',
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
                    'detail' => 'la actualizacion de libros fue correcta',
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
        $book = 'La odisea';
        return response()->json(
            [
                'data' => $book,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'eliminado de libros fue correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function updateState() {
        $book = 'aprobado';
        return response()->json(
            [
                'data' => $book,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'le estado del libro fue correctamente actualizado',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
