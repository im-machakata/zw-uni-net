@extends('layouts.app')
@section('title','Unimap Admissions')
@section('content')
<section class="bg-white container-fluid">
    <div class="container-fluid py-5">
        <h1 class="pt-5">Admissions</h1>
        <p>List of students who have submitted their admissions.</p>

        @if(!$admissions->count())
        <p>No admissions found.</p>
        @endif

        <div class="row justify-content-center">
            @foreach($admissions as $admission)
            <div class="col-md-6 col-lg-4">
                <div class="card p-0">
                    <div class="card-body">
                        <h2 class="h4">{{ $admission->student->name }}</h2>
                        <p>{{ $admission->message }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection