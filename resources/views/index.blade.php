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
            <div class="row g-4 mb-5">
                @foreach($universities as $university)
                <div class="col-lg-3">
                    <div class="card my-3 h-100">
                        <div class="card-body">
                            <img src="https://api.microlink.io/?url={{ urlencode($university->website) }}&palette=true&embed=logo.url&height=100" alt="logo" class="rounded mb-3" loading="lazy" style="height: 100px">
                            <h3 class="card-title fs-6 mt-1">{{ Str::limit($university->name) }}</h3>
                        </div>
                        <div class="card-footer bg-dark rounded-0">
                            <a href="/universities/{{$university->id}}/view" class="text-white">View Univervisty</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="bg-white container-fluid">
    <div class="container-fluid">
        <div class="container-fluid">
            <h2 class="fw-bold pt-2">Recommended Programs</h2>
            <p class="text-muted">Nesciunt accusamus facere blanditiis illo architecto illum consequuntur quod vero?</p>
            <div class="row g-4">
                @foreach($programs as $program)
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title fs-6 my-1">{{ Str::limit($program->name) }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection