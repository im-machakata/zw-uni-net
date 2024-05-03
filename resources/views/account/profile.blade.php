@extends('layouts.app')
@section('title','Unimap My Account')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('layouts.error')
            </div>
            @if(session('user')->type == 'university')
            <div class="col-md-6 py-4">
                <div class="card border-0 mt-5">
                    <div class="card-body">
                        <p><span class="badge bg-primary">{{ $user->type }}</span></p>
                        <h1 class="h1">University Details</h1>
                        <p class="text-muted">Tell Us More About Your University</p>
                        <form action="/university/update" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="university_name" id="university_name" class="form-control" value="{{ $university->name ??'' }}" placeholder="John Doe" required>
                                        <label for="university_name">University Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="university_contact_email" id="university_contact_email" class="form-control" value="{{ $university->contact_email ??'' }}" placeholder="email@gmail.com" required>
                                        <label for="university_contact_email">University Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="university_location" id="university_location" class="form-control" value="{{ $university->location ??'' }}" placeholder="Mashava GZU" required>
                                        <label for="university_location">University Location</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="url" name="university_website" id="university_website" class="form-control" value="{{ $university->website ??'' }}" placeholder="Mashava GZU" required>
                                        <label for="university_website">University Website</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <input type="url" name="university_programs" id="university_programs" class="form-control" value="{{ $university->programs ??'' }}" placeholder="Information Systems, Accounts" required>
                                        <label for="university_programs">University Programs</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <input type="url" name="university_keywords" id="university_keywords" class="form-control" value="{{ $university->keywords ??'' }}" placeholder="GZU, Mashava" required>
                                        <label for="university_keywords">University Keywords</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <textarea name="university_about" id="university_about" class="form-control" placeholder="About university" style="height:100px">{{ $university->about ?? '' }}</textarea>
                                        <label for="university_about">About University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-lg btn-primary submit px-3 mb-3">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-md-6 py-4">
                <div class="card border-0 mt-5">
                    <div class="card-body">
                        <p><span class="badge bg-primary invisible">{{ $user->type }}</span></p>
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