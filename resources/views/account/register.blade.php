@extends('layouts.app')
@section('title','Unimap Register Account')
@section('content')
<section class="container-fluid">
    <div class="container-fluid">
        <div class="row justify-content-center container-fluid">
            <div class="col-md-6 col-lg-4">
                <div class="card mt-5 pt-5">
                    <div class="card-body">
                        <h1 class="text-center">Register</h1>
                        <p class="text-muted text-center">Join our community</p>
                        @include('layouts.error')
                        <form action="/register" class="signin-form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="email@gmail.com" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input id="confirm-password-field" name="password_confirmation" type="password" class="form-control" placeholder="Password" required>
                                <label for="confirm-password">Confirm Password</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 mb-3">Sign Up</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="text-md-right">
                                    <!-- <a href="#">Forgot Password</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection