@extends('layouts.app')
@section('title','Unimap Messages')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row container-fluid mx-auto py-lg-4">
            <div class="col-12 mt-5 pb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="h1">View Messages</h1>
                        <p class="text-muted">Read messages sent by your users</p>
                        <div class="row g-4">
                            @foreach($messages as $message)
                            <div class="col-auto col-lg-3">
                                <div class="border rounded p-4">
                                    <h2 class="fs-4">{{$message->name}}</h2>
                                    <div class="message">{{Str::limit($message->message)}}...</div>
                                    <div class="text-muted">{{ $message->created_at->diffForHumans() }}</div>
                                    <div class="d-flex gap-3">
                                        <a href="/messages/{{$message->id}}/view">Read Message</a>
                                        <a href="/messages/{{$message->id}}/delete">Delete Message</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection