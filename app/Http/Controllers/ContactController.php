<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $correo = new ContactMailable($request->all());
        Mail::to('israelvargas44m@gmail.com')->send($correo);
        return redirect()->route('contact')->with('info', 'Mensaje enviado.');
    }
}
