<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class Registercontroller extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);
        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request-> input('password'));
        $user->role=1;
        $user->save();
        Auth::login($user);
        return redirect()->route('home');

    }

}
