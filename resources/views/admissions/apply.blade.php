@extends('layouts.app')
@section('title', 'Unimap Apply')
@section('content')
<section class="bg-white container-fluid">
    <div class="container-fluid py-5">
        <h1 class="pt-5 h2">Apply to {{ $university->name }}</h1>
        <p>Interested in this university? Send your application letter. They'll see your academic qualifications and get back to you.</p>

        <form action="/university/apply" method="post">
            @csrf
            <div class="row justify-content-center">
            
            </div>
        </form>
    </div>
</section>
@endsection