<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class menuEditor extends Controller{

    public function returnDishTypes(){
        $dishes =  DB::table('dishes')->get();
        $categories =  DB::table('categories_dishes')->get();

        return view('menus.menus',['dishes'=>$dishes,'categories'=>$categories]);
    }         

}
