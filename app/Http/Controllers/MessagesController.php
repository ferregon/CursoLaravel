<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(){
    	request()->validate([
    		'name'  =>  'required',
    		'email'  =>  'required|email',
    		'subject'  =>  'required',
    		'content'  =>  'required|min:5',
    	]);

    	Mail::to('javierferregon@gmail.com')->send(new MessageReceived);
    	return back()->with('status', 'Recibimos tu mail te responderemos lo antes posible');
    }
}
