<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //consulta sql pura
        // $books = DB::select('select * from app.books');

        //con query builder

        // $books = DB::table('app.books')->get();

        //con eloquent -> con mis modelos

        $books = Book::get();


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
        //eloquent
        // $book = Book::create([
        //     'code'=>$request->code,
        //     'date'=>$request->date,
        //     'description'=>$request->description,
        //     'published'=>$request->published,
        //     'title'=>$request->title,

        // ]);

        $book = new Book();
        $book->code = $request->code;
        $book->date = $request->date;
        $book->description = $request->description;
        $book->published = $request->published;
        $book->title = $request->title;
        $book->save();


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
    public function show($book)
    {
         //consulta sql pura
        //  $book = DB::select('select * from app.books where id=?', [$book]);

         //con query builder

        //  $book = DB::table('app.books')->where('id','=',$book)->first();

        //con eloquent

        $book = Book::find($book);

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
    public function update(Request $request, $book)
    {
        // eloquent
        $book =  Book::find($book);
        $book->code = $request->code;
        $book->date = $request->date;
        $book->description = $request->description;
        $book->published = $request->published;
        $book->title = $request->title;
        $book->save();


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
    public function destroy($book)
    {
        //
        $book =  Book::find($book);
        $book -> delete();
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
