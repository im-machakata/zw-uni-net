@extends('layouts.app')
@section('title', 'Unimap Universities')
@section('content')
<section class="bg-dark" style="background: url(/static/images/class.jpg);">
    <div class="container-fluid" style="background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.6))">
        <div class="cover container text-center px-lg-5 px-3">
            <h1 class="fw-bold text-white display-5">Find Your Universe</h1>
            <p class="lead text-white fw-medium">Find programs that match yours, enroll and wait for the reply.</p>
            @include('layouts.search')
        </div>
        <div class="row container mx-auto py-4" style="margin-top: -8rem;">
            @if(!count($universities) && $query)
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="card-title h4 mt-2">No results found!</h2>
                    </div>
                </div>
            </div>
            @endif
            @foreach($universities as $university)
            <div class="col-lg-3">
                <div class="card border-dark border-2 my-3">
                    <div class="card-body">
                        <h2 class="card-title h5 fw-bold">{{ $university->name }}</h2>
                        <p>{{ Str::limit($university->about) }}</p>
                        <p><a href="/apply/{{$university->id}}">Apply</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection