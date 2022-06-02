<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FontendController extends Controller
{
     public function index(){

        $doctors=Doctor::where('status',1)->Latest()->get();
        
         return view('page.index',compact('doctors'));
     }


     public function doctor(){
        $doctors=Doctor::where('status',1)->Latest()->get();
        
         return view('page.doctor',compact('doctors'));
     }

     public function about(){
         return view('page.about');
     }

     public function news(){
        return view('page.news');
    }
    
     


    public function appointment(){
        $doctors=Doctor::where('status',1)->Latest()->get();
        return view('page.appoint',compact('doctors'));
    }
    public function appointDone(Request $request){

        if(Auth::check()){

            
      Appointment::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'department'=>$request->department,
        'doctor_name'=>$request->doctor_name,
        'date'=>$request->date,
        'phone'=>$request->phone,
        'message'=>$request->message,
        'status'=>'In Progress',
        'user_id'=>Auth::user()->id, 
        'created_at' => Carbon::now(),
        
        


    ]);


    return Redirect()->back()->with('success','Appointment done');

        }
        else{
            return redirect()->route('login');
        }
 
    }

    public function myAppoint(){

        if(Auth::id()){
            $userid=Auth::user()->id  ;        
          $appointments=Appointment::where('user_id',$userid)->get();
            return view('page.myappoint',compact('appointments'));

        }
        else {
            return redirect()->back();
        }
       
    }

    public function appointCancel($id){
        Appointment::findOrFail($id)->delete();
        
        return redirect()->back();
    }
}
