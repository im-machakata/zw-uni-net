@extends('layouts.app')
@section('title','Unimap Contact Us')
@section('content')
<section>
    <div class="container-fluid">
        <div class="row container-fluid mx-auto py-lg-4">
            <div class="col-12 mt-5 pt-5 px-md-4"> </div>
            <div class="col-md-6 pb-4">
                <div class="card border-0">
                    <div class="card-body">
                        <h1 class="h1">Contact Us</h1>
                        <p class="text-muted">Send us any feedback</p>
                        <div class="col-12">
                            @include('layouts.error')
                        </div>
                        <form action="/contact-us" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" autocomplete="off" required>
                                        <label for="name">Your name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="email@gmail.com" autocomplete="off" required>
                                        <label for="email">Your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <textarea name="message" id="message" class="form-control" placeholder="Your message" style="height:100px" required></textarea>
                                        <label for="message">Your message</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 mb-3">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection