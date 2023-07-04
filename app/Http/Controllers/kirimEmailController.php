<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\kirimEmail;
use Mail;

class kirimEmailController extends Controller
{
    public function contact(){
        return view('welcome');
    }

    public function sendEmail(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $emailData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message']
        ];

        Mail::to('alpagaming005@gmail.com')->send(new kirimEmail($emailData));

        return redirect()->back()->with('message_sent', 'Pesan Anda Sudah Terkirim Kami Akan Segera Menghubungi Anda!');
    }
}
