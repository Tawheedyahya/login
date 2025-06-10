<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Logincontroller extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            // $user=User::where('email',$email)->f irst();
            Auth::user();
            return redirect('/home');
        }
        else{
            return back()->withErrors(['Invalid']);
        }
    }
    public function logout(){
        AUth::logout();
        return redirect('/');
    }
}
