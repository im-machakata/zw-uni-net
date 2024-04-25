<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function loginPage(){
        return view('account/login')->with('error',null);
    }
    public function createSession(Request $request){
        $request->validate([
            'email'=> [
                'required'
            ],
            'password'=>[
                'required'
            ]
        ]);

        // find user
        $user = User::query()->where('email',$request->email)->firstOrFail();
        
        // verify password hash
        if(!password_verify($request->password,$user->password)){
            return view('account/login')->with('error','Incorrect email or password');
        }

        // create session
        session(['user' => $user]);

        return redirect('/');
    }
}
