<?php

namespace App\Http\Controllers;
use App\Books;
use DB;
use Mail;
use Illuminate\Http\Request;
use App\BookReservation;

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
   
    private static function ipControl(Request $request){
        //first check if the ip is already in the black list  
        $clientIp = $request->ip();
        $ipToCheck = DB::table('blackListIp')->where('ip', $clientIp);

        return $ipToCheck;
    }
    private static function checkTableSpace($guests){
        $tableNeed = 0;

        if($guests <= 4) $tableNeed = 1; 
        else if($guests > 4 && $guests <= 8 ) $tableNeed= 2; 
        else if($guests >= 8 && $guests <= 12)$tableNeed= 3; 
        else if($guests >= 12 && $guests <= 16) $tableNeed= 4;
        else if($guests >= 16 && $guests <= 20) $tableNeed = 5;

        return $tableNeed;
    }
    public function checkIfSpace($tablesNeeded){
        $date = $request['date'];
        $mealType = $request['mealType'];
        $tablesOccupy = DB::select("select count(tables) from bookReservation where menuType='$mealType' and date='$date'");

        return $tablesOccupy;
    }
    public function makeReservation(Request $request){
        $dataToBook = $request->all();

        

        $totalTables = $this->checkTableSpace($dataToBook['persons']);
        BookReservation::insert($dataToBook);

        return redirect()->back()->with('message','Your request will be validate in 24 hours');
    }
   

    
}
