<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

    public function register(){
        return view('pages.register');
     }

     public function register_confirm(Request $request){
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'country' => 'required'   
            
        ]);
        $password = $request->input('password');
        $confirm_password= $request->input('confirm_password');
        if ($password != $confirm_password){
            $message = "confirm password doesnot match";
        
            return view('pages.register',compact('message'));
        }

         else {
             $user = new User;
            $user->name =$request->input('username');
            $user->email =$request->input('email');
            $user->country =$request->input('country');
            $user->password =$request->input('password');
            $user->save();
           
            return redirect('/');
         }  
        

       
     }
}
