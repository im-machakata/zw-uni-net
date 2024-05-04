<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\User;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
    public function deleteSession()
    {
        session()->forget('user');
        session()->flush();
        return redirect('/');
    }
    public function registerPage()
    {
        return view('account/register')->with('error', null);
    }
    public function registerAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required|in:student,university',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return view('account/register')->with('error', $error);
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
    public function viewProfile()
    {
        $user = session('user');
        $university = University::where('user_id', $user->id)->firstOrCreate();

        return view('account/profile')
            ->with('university', $university)
            ->with('user', $user)
            ->with('error', null);
    }
    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return view('account/profile')->with('error', $error);
        }

        // update user
        $form = $validator->validated();
        $user = User::query()->find(session('user')->id);
        $user->name = $form['name'];
        $user->email = $form['email'];
        $user->password = password_hash($form['password'], PASSWORD_DEFAULT);
        $user->save();

        return redirect('/profile')
            ->with('error', null)
            ->with('user', session('user'))
            ->with('success', 'Profile updated');
    }
    public function updateUniversity(Request $request)
    {
        $user = session('user');
        $validation = Validator::make($request->all(), [
            'name' => [
                'required',
            ],
            'location' => [
                'required'
            ],
            'about' => [
                'nullable'
            ],
            'programs' => [
                'nullable',
                'string'
            ],
            'keywords' => [
                'nullable',
                'string'
            ],
            'requirements' => [
                'nullable'
            ],
            'website' => [
                'nullable',
                'url',
            ],
            'contact_email' => [
                'nullable',
                'email',
            ],
        ]);

        if ($validation->fails()) {
            $error = $validation->errors()->first();
            return view('account/profile')
                ->with('error', $error)
                ->with('university', University::find($user->id))
                ->with('user', session('user'));
        }

        // create/update university details
        $university = University::where('user_id', $user->id)->firstOrNew();
        University::updateOrCreate(
            array(
                'id' => $university->id,
                'user_id' => $user->id
            ),
            $validation->validated()
        );

        // show success message
        return back()->with('error', 'University updated');
    }
}
