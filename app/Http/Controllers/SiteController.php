<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Discussion;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(){
        // show all posts by a user
        // $user = User::where('id', 1)->first();
        // return dd($user->discussions);

        $discussion = Discussion::where('id', 1)->first();

        return view('pages.index', compact('discussion'));
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

        // return dd($request);

        if ($user){
            $message = "You have successfully logged in";
            $request->session()->put(
                'username', $user->name
            );
            return redirect('/')->with('success', $message);
        }
        else{
            $message = "This user does not exist";
            return back()->with('error', $message);
            // return view('pages.login',compact('message'));
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
     public function newdiscussion(){
         return view('pages.newdiscussion');
     }
     public function dashboard(){
        return view('pages.dashboard');
    }
}
