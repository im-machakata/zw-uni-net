<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniveristyController extends Controller
{
    public function index(Request $request)
    {
        $results = [];
        $query = null;
        if ($request->has('q')) {
            $query = $request->query('q');
            $results = University::query()
                ->where('name', 'like', '%'. $query. '%')
                ->orWhere('location', 'like', '%'. $query. '%')
                ->orWhere('about', 'like', '%'. $query. '%')
                ->orWhere('keywords', 'like', '%'. $query. '%')
                ->orWhere('programs', 'like', '%'. $query. '%')
                ->orWhere('requirements', 'like', '%'. $query. '%')
                ->orWhere('website', 'like', '%'. $query. '%')
                ->orWhere('contact_email', 'like', '%'. $query. '%')
                ->get();
        }
        return view('search')
            ->with('query', $query)
            ->with('universities', $results);
    }
}
