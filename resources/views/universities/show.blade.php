@extends('layouts.app')
@section('title','Unimap '. $university->name)
@section('content')
<section>
    <div class="container-fluid">
        <div class="container-fluid mx-auto py-lg-4">
            <div class="card border-0 mt-5">
                <div class="card-body">
                    <img src="https://api.microlink.io/?url={{ urlencode($university->website) }}&palette=true&embed=logo.url&height=100" alt="logo" class="rounded mb-3" loading="lazy" style="height: 100px">
                    <h1 class="fs-4 fw-bold mt-3">{{ $university->name }}</h1>
                    <p class="text-muted mb-0">{{ $university->about }}</p>
                    <div class="text-muted d-flex flex-row flex-wrap gap-2 gap-lg-4 mt-2 mb-3">
                        <div>
                            <i class="fa-solid fa-globe pe-1"></i>
                            <a href="{{ $university->website }}" target="_blank" rel="noopener noreferrer">{{ $university->website }}</a>
                        </div>
                        <div>
                            <i class="fa-solid fa-envelope pe-1"></i>
                            <a href="mailto:{{ $university->contact_email }}" target="_blank" rel="noopener noreferrer">{{ $university->contact_email }}</a>
                        </div>
                    </div>

                    <h2 class="fs-4">Programs Offered</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Program</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($university->programs as $program)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $program->name }}</td>
                                    <td>${{ $program->price }}</td>
                                    <td>{{ $program->created_at->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <h2 class="fs-4">Related Keywords</h2>
                    <div class="flex flex-wrap flex-column mb-3">
                        <?php $keywords = explode(',', $university->keywords); ?>
                        @foreach($keywords as $keyword)
                        <h3 class="fs-6 badge bg-light text-body border fw-normal user-select-all">{{ $keyword }}</h3>
                        @endforeach
                    </div>

                    <div class="d-flex gap-3">
                        @if(session('user')->type == 'university')
                        <a href="/universities/{{ $university->id }}/edit" rel="noopener noreferrer" class="btn btn-outline-primary border-1 px-5">Edit</a>
                        @endif
                        <a href="{{ $university->application_url ?? $university->website}}" target="_blank" rel="noopener noreferrer" class="btn btn-primary px-5">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection