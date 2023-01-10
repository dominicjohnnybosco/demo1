<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('welcome');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services');
    }

    public function onePage(){
        return view('one-page');
    }

    public function sendMessage(){
        return view('welcome');
    }

    // insert the data's from the from into the database

    public function sendMessageBtn(Request $request){
        DB::table('call_back')->insert([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);
        return back()->with('Message_Added','Messages Added Successfully to database!');
    }


    // fetch the data's from the database and display it

    public function getMessage(){
        $messages = DB::table('call_back')->get();
        return view('clients-list', compact('messages'));
    }
    
}
