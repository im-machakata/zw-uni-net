<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniveristyController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('q')){
            $title = '';
        }
        return view('search');
    }
}
