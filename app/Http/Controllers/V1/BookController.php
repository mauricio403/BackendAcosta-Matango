<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Books\StoreBookRequest;
use App\Http\Requests\V1\Books\UpdateBookRequest;
use App\Http\Resources\V1\Books\BookCollection;
use App\Http\Resources\V1\Books\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new BookCollection(Book::paginate());
       
        // $books = Book::get();
        // return response()->json(
        //     [
        //         'data' => $books,
        //         'msg' => [
        //             'sumary' => 'consulta correcta',
        //             'detail' => 'la consulta de libros fue correcta',
        //             'code' => '200'
        //         ]
        //     ],
        //     200
        // );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {
   

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
    public function show(Book $book)
    {
        return new BookResource( $book);

        // return response()->json(
        //     [
        //         'data' => $book,
        //         'msg' => [
        //             'sumary' => 'consulta correcta',
        //             'detail' => 'la consulta del libro fue correcta',
        //             'code' => '200'
        //         ]
        //     ],
        //     200
        // );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        // eloquent
        // $book =  Book::find($book);
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

    



    public function destroy(Book $book)
    {
        //
        // $book =  Book::find($book);
        $book -> delete();
        return response()->json(
            [
                'data' => $book, 
                'msg' => [
                    'sumary' => 'Libro elminado',
                    'detail' => 'eliminado de libros fue correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function destroys( $request)
    {
        $books = Book::whereIn('id', $request->input('ids'))->get();
        Book::destroy($request->input('ids'));

        return (new BookCollection($books))
            ->additional([
                'msg' => [
                    'summary' => 'Usuarios Eliminados',
                    'detail' => '',
                    'code' => '201'
                ]
            ]);
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
