<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    
    public function contact(){
        return view('page.contact');
    }

    
    public function sendMail(Request $request){
        $details=[
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->message,
             
        ];
        Mail::to("monirul7377227@gmail.com")->send(new MyTestMail($details)) ;
        return back()->with(" message_sent", "Your message has been sent successfully!");
    }

}
