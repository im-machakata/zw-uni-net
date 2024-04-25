<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function loginPage()
    {
        return view('account/login')->with('error', null);
    }
    public function createSession(Request $request)
    {
        $request->validate([
            'email' => [
                'required'
            ],
            'password' => [
                'required'
            ]
        ]);

        // find user
        $user = User::query()->where('email', $request->email)->first();

        if (!$user) {
            return view('account/login')->with('error', 'Incorrect email or password');
        }

        // verify password hash
        if (!password_verify($request->password, $user->password)) {
            return view('account/login')->with('error', 'Incorrect email or password');
        }

        // create session
        session(['user' => $user]);

        return redirect('/');
    }
    public function registerPage()
    {
        return view('account/register')->with('error', null);
    }
    public function registerAccount(Request $request)
    {
        $form = $request->validate([
            'name' => [
                'required'
            ],
            'email' => [
                'required'
            ],
            'password' => [
                'required',
                'min:8',
                'max:255'
            ],
            'password_confirmation' => [
                'required',
                'same:password'
            ]
        ]);

        if (!$request->validated()) {
            return view('account/register')->with('error', 'Incorrect email or password');
        }

        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]);

        // create session
        session(['user' => $user]);

        return redirect('/');
    }
}
