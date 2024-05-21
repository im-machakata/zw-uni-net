@extends('layouts.app')
@section('title','Unimap Messages')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row container-fluid mx-auto py-lg-4">
            <div class="col-12 mt-5 pb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="card-title">{{$message->name}}</h1>
                        <div class="text-muted">Sent: {{ $message->created_at->diffForHumans() }}</div>
                        <p class="card-text">{{$message->message}}</p>
                        <hr class="border">
                        <div class="d-flex gap-3">
                            <a href="/messages/{{$message->id}}/delete" class="btn btn-danger">Delete Message</a>
                            <a href="mailto:{{$message->email}}" class="btn btn-primary">Reply {{$message->name}}</a>
                        </div>
                        @foreach($related as $message)
                        <div class="col-auto col-lg-3 mt-4">
                            <div class="border rounded p-4 py-3">
                                <h2 class="fs-4">{{$message->name}}</h2>
                                <span>{{ $message->created_at->diffForHumans() }}</span>
                                <div class="text-muted d-flex">
                                    <div class="message">{{Str::limit($message->message)}}...</div>
                                    <a href="/messages/{{$message->id}}/view">read more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection