@extends('layouts.app')
@section('title','Unimap Register Account')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 py-4">
                <div class="card border-0 mt-5">
                    <div class="card-body">
                        <h1 class="h1">Personal Details</h1>
                        <p class="text-muted">Tell Us More About Yourself</p>
                        @include('layouts.error')
                        <form action="/register" class="signin-form" method="post">
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
            @if($user->type =='student')
            <div class="col-md-6 py-4">
                <div class="card border-0 mt-5">
                    <div class="card-body">
                        <h1 class="h1">Profile</h1>
                        <p class="text-muted">Tell Us More About Yourself</p>
                        @include('layouts.error')
                        <form action="/register" class="signin-form" method="post">
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
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <select name="type" id="type" class="form-select" required>
                                            <option value="student" selected>Student</option>
                                            <option value="university">University</option>
                                        </select>
                                        <label for="type">User Type</label>
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
            @else
            <div class="col-md-6 py-4">
                <div class="card border-0 mt-5">
                    <div class="card-body">
                        <h1 class="h1">Profile</h1>
                        <p class="text-muted">Tell Us More About Yourself</p>
                        @include('layouts.error')
                        <form action="/register" class="signin-form" method="post">
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
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <select name="type" id="type" class="form-select" required>
                                            <option value="student" selected>Student</option>
                                            <option value="university">University</option>
                                        </select>
                                        <label for="type">User Type</label>
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
                                <button type="submit" class="form-control btn btn-lg btn-primary submit px-3 mb-3">University Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection