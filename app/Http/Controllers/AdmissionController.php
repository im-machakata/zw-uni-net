<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\University;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewAdmissions()
    {
        $admissions = Admission::all();
        return view('admissions/index', ['admissions' => $admissions])->with('error', null);
    }
    public function viewMyAdmissions()
    {
        $user = session('user');
        $admissions = Admission::where('student_id', $user->id)->get();
        return view('admissions/show', ['admissions' => $admissions])->with('error', null);
    }

    public function viewApplyToUniversity($id)
    {
        $university = University::where('id', $id)->firstOrFail();
        return view('admissions/apply')->with('error', null)->with('university', $university);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
