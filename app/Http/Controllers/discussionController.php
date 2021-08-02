<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DiscussionController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        return view('pages.login');
    }
    public function confirm_login(Request $request){
        $email = $request->input('email');
        $password =$request->input('password');
        $user = User::where([
            'email'=> $email,
          'password' =>$password
        ])->first();

        // return dd($saved_url);

        if ($user){
            return dd($user);
        }
        else{
            $message = "This user does not exist";
            return view('pages.index');
        }

    }
}
