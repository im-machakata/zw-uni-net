<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $universities = University::query()->get();
        return view('index')
            ->with('universities', $universities);
    }
}
