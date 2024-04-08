<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniveristyController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('program')){
            $title = '';
        }
        return view('universities');
    }
}
