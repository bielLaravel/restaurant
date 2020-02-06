<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\blackListIp;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Book;

class BookingControll extends Controller{
    

    /*private function checkTableSpace($guests){
        $tableNeed;
        if($guests <= 4) $tableNeed= 1; 
        else if($guests > 4 && $guests <= 8 ) $tableNeed= 2; 
        else if($guests >= 8 && $guests <= 12)$tableNeed= 3; 
        else if($guests >= 12 && $guests <= 16) $tableNeed= 4;

        return $tableNeed;
    }
    
    
    private function checkRestaurantSpace(){
        $numberOfPersonBook = DB::select("SELECT COUNT('tables') FROM meal_type,book_list WHERE booklist.meal_type='$meal_type' and date='$date'");
        $tablesNeed = $this->checkTableSpace($guests);
        $totalSpaceToCheck =  $numberOfPersonBook +  $tablesNeed;
       
        //return de la nova taula mes les que i havien sha de comparar amv el maxim de taules
        return $totalSpaceToCheck;
   }
    public function saveBooking(Request $request){
         $clientIp = $request->ip();
         $numberOfGuest = $request->input('person');
         $max_guests = 4;
         $returnMessage;
         
        //Firts we check the ip
         if(!($this->ipControl($clientIp))){ 
             //validate the data
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'lastname' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'hour' => 'required',
                'person' => 'required',
                'date' => 'required',     
                'message' => 'required',

            ]);
            if ($validator->fails()) $returnMessage =  redirect()->back()->with('errorMessage', 'Cannot make the request');
           
            else {
             // tables for 4 guest
             $resultCreate = $this->saveBook();
             if($resultCreate) $returnMessage = redirect()->back()->with('message','Create the book with succefull'.$id);
             
            }
    
            }else $returnMessage = 'you have done a request today';

            return $returnMessage;  
        }    
       
       
        public function ipControl(  $clientIp ){
            //first check if the ip is already in the black list
            $ipToCheck = DB::table('blackListIp')->where('ip', $clientIp);
    
            return $result = $ipToCheck;
        }
        public function saveBook(Request $request){
            $status = ($request->input('persons') <= 4) ? 1 : 0;
          
            DB::table('booksReservation')->insert(
                ['name' =>  $request->input('name'),'date' => $request->input('date'),
                'phone'=> $request->input('phone'), 'email'=>$request->input('email'),
                'hour'=>$request->input('time'),'persons'=>$request->input('persons'),'status'=>$status]
            );   
  
        }*/
        public function updateBook(Request $request, $id){
        
            if(Book::find($id)){
                $name= $request->input('name');
                $persons = $request->input('persons');
                $date = $request->input('date');
                $email = $request->input('email');
                $hour = $request->input('hour');
                $state = (int) $request->input('state');
                DB::update('update booksReservation set name = ?,persons=?,status=?,date=?,email=?,hour=? where id = ?',[$name,$persons,$state,$date,$email,$hour,$id]);
             } 
         return redirect()->back()->with('message','Update the book with the id '.$id);
        }
         public function deleteBook(Request $request, $id){
            $message;
            if (Book::where('id', $id)->first()){                
                $bookToDelete = Book::find($id);
                if($bookToDelete->delete()) $message  = redirect()->back()->with('message','Delete the book with the id '.$id);
                //return $result = ($bookToDelete->delete()) ? "The books is delete succefuly" : "The books is delete succefuly";
            }
            return redirect()->back()->with('errorMessage','something is bad');
        }
        public function returnBook(){
            $books =  DB::table('booksReservation')->get();

            return view('crudBook')->with('books',$books);
        }
}

    /* 

   
    
    TOTES LES RESERVES ENCARA QUE ESTIGUIN VALIDADES ES PODRAN REALITZAR UN CRUD. 
        CANCEL: agafarem id i enviarem un correu a la persona dien que la reserva a estat cancelada canviarem lestat.
        ACCEPT: agafarem id i enviarem un correu a la persona dien que la reserva a estat aceptada canviarem lestat.
        
        if(the request is accept){
            change the state to validate
            send the email
        }else{
            change the state to invalid
            send the email

        }
        
        
*/