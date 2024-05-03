<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniveristyController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('q')){
            $title = '';
        }
        return view('search');
    }

    public function search(Request $request){}
}
