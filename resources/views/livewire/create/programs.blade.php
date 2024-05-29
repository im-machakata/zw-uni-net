<div class="container-fluid">
    <div class="row container-fluid mx-auto py-lg-4">
        <div class="col-12 mt-5 pt-5 px-md-4">
            @include('layouts.error')
        </div>
        <div class="col-lg-6 pb-4">
            <div class="card">
                <div class="card-body">
                    <p><span class="badge bg-primary">{{ $user->type }}</span></p>
                    <h1 class="h1 fs-2">University Details</h1>
                    <p class="text-muted">Tell Us More About Your University</p>
                    <form action="/universities" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="text" name="name" id="university_name" class="form-control" placeholder="John Doe" autocomplete="off" required>
                                    <label for="university_name">University Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="email" name="contact_email" id="university_contact_email" class="form-control" placeholder="email@gmail.com" autocomplete="off" required>
                                    <label for="university_contact_email">University Email</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group form-floating mb-3">
                                    <input type="text" name="location" id="university_location" class="form-control" placeholder="Mashava GZU" autocomplete="off" required>
                                    <label for="university_location">University Location</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group form-floating mb-3">
                                    <input type="url" name="website" id="university_website" class="form-control" placeholder="Mashava GZU" autocomplete="off" required>
                                    <label for="university_website">University Website</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group form-floating mb-3">
                                    <input type="url" name="application_url" id="application_url" class="form-control" placeholder="Mashava GZU" autocomplete="off" required>
                                    <label for="application_url">Application Url</label>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="text" name="programs" id="university_programs" class="form-control tags" placeholder="Information Systems, Accounts" autocomplete="off" required>
                                    <label for="university_programs">University Programs</label>
                                    <small class="form-text text-muted">Enter a comma-separated list of programs offered by the university.</small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group form-floating mb-3">
                                    <input type="text" name="keywords" id="university_keywords" class="form-control tags" placeholder="GZU, Mashava" autocomplete="off" required>
                                    <label for="university_keywords">University Keywords</label>
                                    <small class="form-text text-muted">Enter comma separated keywords related to the university</small>
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
                            <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 mb-3">Save &amp; Add University</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row">
            </div>
        </div>
    </div>
</div>