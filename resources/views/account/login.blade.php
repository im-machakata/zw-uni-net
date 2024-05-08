@extends('layouts.app')
@section('title','Unimap Login')
@section('content')
<section class="container-fluid">
    <div class="container-fluid cover">
        <div class="row container-fluid justify-content-center py-5">
            <div class="col-md-6 col-lg-4">
                <div class="card p-0 mt-5">
                    <div class="card-body">
                        <h1 class="text-center">Login</h1>
                        <p class="text-muted text-center">Welcome back!</p>
                        @include('layouts.error')
                        <form action="/login" class="signin-form" method="post">
                            @csrf
                            <div class="form-group form-floating mb-3">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" placeholder="email@gmail.com" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input id="password-field" name="password" type="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 mb-3">Sign In</button>
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