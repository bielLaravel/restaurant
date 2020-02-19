<?php

namespace App\Http\Controllers;
use App\ContactUS;
use Mail;
use DB;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{
/**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function contactUS()
    {
        return view('contactUS');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request){
     $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
     ContactUS::create($request->all()); 
    
     Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
     {
        $message->from('dashboardlaravel@gmail.com');
        $message->to('dashboardlaravel@gmail.com', 'Admin')->subject('Contact');
    });
     return back()->with('success', 'Gracies per contactar'); 
    }
   
    
    

}
