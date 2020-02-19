<?php

namespace App\Http\Controllers;

use App\Books;
use DB;

use Illuminate\Http\Request;

class BookControll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $obj = $request['obj'];

         Books::insert($obj);
         $books =  DB::table('booksReservation')->get();
         return view('books.tableBook')->with('books',$books);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books,$id){
        $obj = $request['obj'];

        Books::whereId($id)->update($obj);
        $books =  DB::table('booksReservation')->get();
        return view('books.tableBook')->with('books',$books);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Books $books){
        $obj = $request['obj'];
       
        Books::where('id', $obj)->delete();
        $books =  DB::table('booksReservation')->get();
        return view('books.tableBook')->with('books',$books);
    }

    public function returnBook(){
        $books =  DB::table('booksReservation')->get();
        $categories =  DB::table('food_categories')->get();
        return view('books.crudBook',['books'=>$books,'categories'=>$categories]);
    }
}
