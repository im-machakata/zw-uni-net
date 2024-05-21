<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('feedback/index')->with('messages', Feedback::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback/create')->with('error', null);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validation->fails()) {
            $error = $validation->errors()->first();
            return back()->with('error', $error);
        }

        Feedback::query()->create($validation->validated());
        return view('feedback.create')->with('success', 'Thank you for your feedback.')->with('error', null);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $message = Feedback::findOrFail($id);
        return view('feedback.show')
            ->with('message', $message)
            ->with('related', Feedback::query()
                ->whereName($message->name)
                ->whereNot('id', $message->id)
                ->orWhere('email', $message->email)
                ->whereNot('id', $message->id)
                ->limit(4)->get());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Feedback::query()->where('id', '=', $id)->delete();
        return redirect('/messages');
    }
}
