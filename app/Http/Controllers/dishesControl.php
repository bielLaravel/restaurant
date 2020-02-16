<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\dishes;

class dishesControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
          


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
          $obj = $request['obj'];
          dishes::insert($obj);
          $dishes =  DB::table('dishes')->get();
          $categories =  DB::table('categories_dishes')->get();
  
          return view('menus.dishAdd',['dishes'=>$dishes,'categories'=>$categories]);
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $obj = $request['obj'];
        dishes::whereId($id)->update($obj);
        $dishes =  DB::table('dishes')->get();
        $categories =  DB::table('categories_dishes')->get();

        return view('menus.dishAdd',['dishes'=>$dishes,'categories'=>$categories]);   
     }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        $obj = $request['obj'];
        dishes::where('id', $obj)->delete();
        $dishes =  DB::table('dishes')->get();
        $categories =  DB::table('categories_dishes')->get();

        return view('menus.dishAdd',['dishes'=>$dishes,'categories'=>$categories]);
    }
}
