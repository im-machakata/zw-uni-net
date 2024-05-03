@extends('layouts.app')
@section('title','Unimap Universities')
@section('content')
<section class="bg-dark" style="background: url(/static/images/class.jpg);">
    <div class="container-fluid" style="background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.6))">
        <div class="cover container text-center px-lg-5 px-3">
            <h1 class="fw-bold text-white display-5">Find Your Universe</h1>
            <p class="lead text-white fw-medium">Find programs that match yours, enroll and wait for the reply.</p>
            <form action="/search" method="get">
                <div class="row justify-content-center place-items-center">
                    <div class="col-lg-8 mb-3">
                        <input type="search" name="q" class="form-control form-control-lg rounded-pill text-center" placeholder="Which Program(s) Are You Interested In? " required>
                    </div>
                    <div class="col-12"></div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-light rounded-pill w-100 btn-lg text-uppercase">find universes</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            @foreach($universities as $university)
            <div class="col-lg-3">
                <div class="card my-3">
                    <div class="card-body">
                        <h2 class="card-title">{{ $university->name }}</h2>
                        <p>{{ $university->website }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection