<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class MessagesController extends Controller
{
  public function store(){
    
   $msg = request()->validate([
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'content' => 'required'
    ]);


    // envio de email 

    Mail::to('danielmolinn@outlook.es')->send(new MessageReceived($msg));

    return 'mensajes enviados';

    }
}
