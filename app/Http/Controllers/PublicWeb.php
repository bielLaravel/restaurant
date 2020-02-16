<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PublicWeb extends Controller{
    public function returnCategories(){
        $categories = DB::table('categories_dishes')->get();
        $dishes = DB::select("select * from dishes where categorie='primers'");
        return view('child',['dishes'=>$dishes,'categories'=>$categories]);
    }
    public function getDishes(Request $request, $id){
        $categorieId = $request['obj'];
        $dishes = DB::select("select * from dishes where categorie='$id'");

        return view('publicMenus',['dishes'=>$dishes]);
    }
}
