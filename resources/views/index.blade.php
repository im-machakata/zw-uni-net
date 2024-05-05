@extends('layouts.app')
@section('title','Unimap Home')
@section('content')
<section class="p-2 p-md-4 py-5">
    <div class="pt-3"></div>
    <div class="bg-dark rounded-3 mt-5 relative" style="background: url(/static/images/class.jpg);">
        <div class="container-fluid rounded-3 absolute" style="background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.6))">
            <div class="cover container text-center px-lg-5 px-3">
                <h1 class="fw-bold text-white display-5">Find Your Universe</h1>
                <p class="lead text-white fw-medium">Find programs that match yours, enroll and wait for the reply.</p>
                @include('layouts.search')
            </div>
        </div>
    </div>
</section>
<section class="bg-white container-fluid">
    <div class="container-fluid">
        <div class="container-fluid">
            <h2 class="fw-bold pt-2">Institutions Registered</h2>
            <p class="text-muted">Nesciunt accusamus facere blanditiis illo architecto illum consequuntur quod vero?</p>
            <div class="row">
                @foreach($universities as $university)
                <div class="col-lg-3">
                    <div class="card my-3">
                        <div class="card-body">
                            <h3 class="card-title h5 mt-1">{{ $university->name }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection