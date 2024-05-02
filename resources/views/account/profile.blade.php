@extends('layouts.app')
@section('title','Unimap My Account')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('layouts.error')
            </div>
            <div class="col-md-6 py-4">
                <div class="card border-0 mt-5">
                    <div class="card-body">
                        <p><span class="badge bg-primary">{{ $user->type }}</span></p>
                        <h1 class="h1">Personal Details</h1>
                        <p class="text-muted">Tell Us More About Yourself</p>
                        <form action="/profile/update" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" placeholder="John Doe" required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" placeholder="email@gmail.com" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input id="confirm-password-field" name="password_confirmation" type="password" class="form-control" placeholder="Password" required>
                                <label for="confirm-password">Confirm Password</label>
                                <span toggle="#confirm-password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-lg btn-primary submit px-3 mb-3">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection