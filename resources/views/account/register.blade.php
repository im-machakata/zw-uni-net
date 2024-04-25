@extends('layouts.app')
@section('title','Unimap Register Account')
@section('content')
<section class="bg-dark" style="background: url(/static/images/class.jpg);">
    <div class="container-fluid" style="background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.6))">
        <div class="cover text-center px-lg-5 px-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 py-4">
                        <div class="card mt-5">
                            <div class="card-body">
                                <h1 class="text-center">Register</h1>
                                <p class="text-muted">Join our community</p>
                                @include('layouts.error')
                                <form action="/register" class="signin-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-floating mb-3">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" placeholder="John" required>
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-floating mb-3">
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" placeholder="email@gmail.com" required>
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
                                        <button type="submit" class="form-control btn btn-lg btn-primary submit px-3 mb-3">Sign Up</button>
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
        </div>
    </div>
</section>
@endsection