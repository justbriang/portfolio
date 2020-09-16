<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUS;
use Illuminate\Support\Facades\Mail;

class ContactUSController extends Controller{

  
    
       public function contactUS()
    {
    return view('contactUS');
    } 
       /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
       public function store(Request $request) 
       {
        $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'subject' => 'required','message' => 'required' ]);
        ContactUS::create($request->all()); 
       
        Mail::send('email',
           array(
               'name' => $request->get('name'),
               'email' => $request->get('email'),
               'subject' => $request->get('subject'),
               'user_message' => $request->get('message')
           ), function($message)
       {
           $message->from('saquib.gt@gmail.com');
           $message->to('elizabeth.waeni.m@gmail.com', 'Admin');
       });
        return back()->with('success', 'Thanks for contacting us!'); 
       }
    }