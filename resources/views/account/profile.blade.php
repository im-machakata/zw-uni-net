@extends('layouts.app')
@section('title','Unimap My Account')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-5 pt-5 px-md-4">
                @include('layouts.error')
            </div>
            @if(session('user')->type == 'university')
            <div class="col-md-6 pb-4">
                <div class="card">
                    <div class="card-body">
                        <p><span class="badge bg-primary">{{ $user->type }}</span></p>
                        <h1 class="h1">University Details</h1>
                        <p class="text-muted">Tell Us More About Your University</p>
                        <form action="/university/update" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="university_name" class="form-control" value="{{ $university->name ??'' }}" placeholder="John Doe" autocomplete="off" required>
                                        <label for="university_name">University Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="contact_email" id="university_contact_email" class="form-control" value="{{ $university->contact_email ??'' }}" placeholder="email@gmail.com" autocomplete="off" required>
                                        <label for="university_contact_email">University Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="location" id="university_location" class="form-control" value="{{ $university->location ??'' }}" placeholder="Mashava GZU" autocomplete="off" required>
                                        <label for="university_location">University Location</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="url" name="website" id="university_website" class="form-control" value="{{ $university->website ??'' }}" placeholder="Mashava GZU" autocomplete="off" required>
                                        <label for="university_website">University Website</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="programs" id="university_programs" class="form-control tags" value="{{ $university->programs ??'' }}" placeholder="Information Systems, Accounts" autocomplete="off" required>
                                        <label for="university_programs">University Programs</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="keywords" id="university_keywords" class="form-control tags" value="{{ $university->keywords ??'' }}" placeholder="GZU, Mashava" autocomplete="off" required>
                                        <label for="university_keywords">University Keywords</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <textarea name="about" id="university_about" class="form-control" placeholder="About university" style="height:100px" required>{{ $university->about ?? '' }}</textarea>
                                        <label for="university_about">About University</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 mb-3">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 pb-4">
                <div class="card">
                    <div class="card-body">
                        <p><span class="badge bg-primary">{{ $user->type }}</span></p>
                        <h1 class="h1">Academic Qualification</h1>
                        <p class="text-muted">Tell Us More About Your Academic Details</p>
                        <form action="/academic/update" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="university_name" class="form-control" value="{{ $university->name ??'' }}" placeholder="John Doe" autocomplete="off" required>
                                        <label for="university_name">Institution</label>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="contact_email" id="university_contact_email" class="form-control" value="{{ $university->contact_email ??'' }}" placeholder="email@gmail.com" autocomplete="off" required>
                                        <label for="university_contact_email">Module</label>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="contact_email" id="university_contact_email" class="form-control" value="{{ $university->contact_email ??'' }}" placeholder="email@gmail.com" autocomplete="off" required>
                                        <label for="university_contact_email">Grade</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="disabled form-control btn btn-lg btn-dark submit px-3 mb-3">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-md-6 pb-4">
                <div class="card">
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
                                <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 mb-3">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection