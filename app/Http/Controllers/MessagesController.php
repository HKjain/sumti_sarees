<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
     public function submit(Request $request)
    {
    	$this->validate($request, ['Name' => 'required', 'Email' => 'required']);
    	
    	//create new message
    	$message = new Message;
    	$message->name = $request->input('Name');
		$message->email = $request->input('Email');
		$message->message = $request->input('Message');

		//save message
		$message->save();

		//redirect
		return redirect('/contact')->with('success', 'Message sent Successfully!');

    }
    
    public function getMessages(){
    	$messages = Message::all();

    	return view('messagesPage') -> with('allMessages', $messages);
    }
    
}
