<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\blackListIp;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Book;

class BookingControll extends Controller{
    

    private function checkTableSpace($guests){
        $maxGuestsOnline = 20;
        $maxTablesOnline = 5;
        $tableNeed;

        if($guests <= 4) $tableNeed = 1; 
        else if($guests > 4 && $guests <= 8 ) $tableNeed= 2; 
        else if($guests >= 8 && $guests <= 12)$tableNeed= 3; 
        else if($guests >= 12 && $guests <= 16) $tableNeed= 4;
        else if($guests >= 16 && $guests <= 20) $tableNeed = 5;

        return $tableNeed;
    }
    public function checkIfSpace($tablesNeeded){
        $tablesOccupy = DB::select("select count(tables) from bookReservation where mealType='$mealType' and date='$date'");

        return $tablesOccupy;
    }
    
    public function generateTheBook(Request $request){
        $tablesNeed = $this->checkTableSpace($guests);
        $isSpace = $this->checkIfSpace($tablesNeeded);
        $errorMessage = 'No tenim suficient lloc per la data en que has intentat reserva';
        //Comprovarem si la ip esta en la llista negra
        if(!$this->ipControl()){
            //comprovem si ha lloc per les persones indicades
            if($isSpace){
                
                if($guestsToBook > 20){
                    return view('books.tableBook')->with('errorMesage','hauras de trucar per realitzar aquesta resercva');
                } 
                else if($guestsToBook <= 4){ //Si son menys de 4 o quatre podran realitzar la reserva inmediatament
                
                    //guardem la reserca  status=validate retornem un missatge
                     BookingControll::saveBook(); 
                    //senvia correu de validacio correcta

    
                }
                else if($guestsToBook > 4){ //Si son mes de quatre la reserva es realitzara pero tindra que ser validada per telefon o email
                   
                    BookingControll::saveBook(); 
                    //senvia correu en validacio
                    return 'sha de validar manualment';
              }
        }else{

        }
            
    }
        else{
            return 'message';
        }
    }
    public function ipControl(){
        //first check if the ip is already in the black list  
        $clientIp = $request->ip();
        $ipToCheck = DB::table('blackListIp')->where('ip', $clientIp);

        return $result = $ipToCheck;
    }
    private static function saveBook(){
        $dataToInsert = $request->all();
        Books::insert($dataToInsert);
        $books =  DB::table('booksReservation')->get();

    }
        

}