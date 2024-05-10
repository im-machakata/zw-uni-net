<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniveristyController extends Controller
{
    public function search(Request $request)
    {
        $results = [];
        $query = null;
        if ($request->has('q')) {
            $query = $request->query('q');
            $results = University::query()
                ->where('name', 'like', '%' . $query . '%')
                ->orWhere('location', 'like', '%' . $query . '%')
                ->orWhere('about', 'like', '%' . $query . '%')
                ->orWhere('keywords', 'like', '%' . $query . '%')
                ->orWhere('programs', 'like', '%' . $query . '%')
                ->orWhere('requirements', 'like', '%' . $query . '%')
                ->orWhere('website', 'like', '%' . $query . '%')
                ->orWhere('contact_email', 'like', '%' . $query . '%')
                ->get();
        }
        return view('search')
            ->with('query', $query)
            ->with('universities', $results);
    }
    public function index()
    {
        $user = session('user');
        $universities = University::all();
        return view('universities/create')
            ->with('error', null)
            ->with('user', $user)
            ->with('universities', $universities);
    }
    public function update(Request $request, $id)
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
            return back()
                ->with('error', $error)
                ->with('university', University::find($user->id))
                ->with('user', session('user'));
        }

        // update university details
        University::query()->where('id', $id)->update($validation->validated());

        // show success message
        return redirect('/universities')->with('error', 'University updated');
    }
    public function edit($id)
    {
        $user = session('user');
        $university = University::find($id);
        return view('universities/update')
            ->with('error', null)
            ->with('user', $user)
            ->with('university', $university);
    }
    public function create(Request $request)
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
            return back()
                ->with('error', $error)
                ->with('user', $user);
        }

        // create university details
        University::query()->create($validation->validated());

        // show success message
        return back()->with('error', 'University updated');
    }
    public function show($id)
    {
        $university = University::findOrFail($id);
        return view('universities/show')
            ->with('university', $university);
    }
    public function delete($id)
    {
        University::query()->where('id', $id)->delete();
        return back()->with('error', 'Institution has been deleted successfully.');
    }
}
