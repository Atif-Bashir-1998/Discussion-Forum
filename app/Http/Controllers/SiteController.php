<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiteController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
     }
    public function confirm_login(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);
        $email = $request->input('email');
        $password =$request->input('password');
        $user = User::where([
            'email'=> $email,
            'password' =>$password
        ])->first();

        // return dd($user);

        if ($user){
            return view('pages.index');
        }
        else{
             $message = "This user does not exist";
            return view('pages.login',compact('message'));
        }

    }
}
