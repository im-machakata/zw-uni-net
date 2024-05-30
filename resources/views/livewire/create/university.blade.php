<section>
    <div class="container-fluid">
        <div class="row container-fluid mx-auto py-lg-4">
            <div class="col-12 pb-4">
                <div class="card">
                    <div class="card-body mt-5 pt-4">
                        <p><span class="badge bg-primary">{{ $this->user->type }}</span></p>
                        <h1 class="h1 fs-2">University Details</h1>
                        <p class="text-muted">Tell Us More About Your University</p>
                        <form wire:submit="save">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    @include('layouts.error')
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="John Doe" wire:model="name" autocomplete="off" required>
                                        <label for="name">University Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group form-floating mb-3">
                                        <input type="email" name="contactEmail" id="contactEmail" class="form-control" placeholder="email@gmail.com" autocomplete="off" wire:model="contactEmail" required>
                                        <label for="contactEmail">University Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="location" id="location" class="form-control" placeholder="Mashava GZU" autocomplete="off" wire:model="location" required>
                                        <label for="location">University Location</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group form-floating mb-3">
                                        <input type="url" name="website" id="website" class="form-control" placeholder="Mashava GZU" autocomplete="off" wire:model="website" required>
                                        <label for="website">University Website</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group form-floating mb-3">
                                        <input type="url" name="application_url" id="application_url" class="form-control" placeholder="Mashava GZU" autocomplete="off" wire:model="applicationUrl" required>
                                        <label for="application_url">Application Url</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="keywords" id="keywords" class="form-control tags" placeholder="GZU, Mashava" autocomplete="off" wire:model="keywords" required>
                                        <label for="keywords">University Keywords</label>
                                        <small class="form-text text-muted">Enter comma separated keywords related to the university</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <textarea name="about" id="about" class="form-control border-dark" placeholder="About university" row="8" wire:model="about" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="form-control btn btn-lg btn-dark submit px-3 mb-3" wire:click="save">Add Programs</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($universities as $university)
                    <div class="col-md-6 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <img src="https://api.microlink.io/?url={{ urlencode($university->website) }}&palette=true&embed=logo.url&height=100" alt="logo" class="rounded mb-3" loading="lazy" style="height: 100px">
                                <h2 class="card-title h5 fw-bold">{{ Str::limit($university->name, 20) }}</h2>
                                <div class="row">
                                    <div class="col-12">
                                        <i class="fa-solid fa-globe"></i> {{ $university->website }}
                                    </div>
                                    <div class="col-12">
                                        <i class="fa-solid fa-envelope"></i> {{ $university->contact_email }}
                                    </div>
                                    <div class="col-12">
                                        <i class="fa-solid fa-location-dot"></i> {{ $university->location }}
                                    </div>
                                </div>
                                <p>{{ Str::limit($university->about,40) }}</p>
                                <div class="row container row-cols-4 gap-2">
                                    @if($this->user->type == 'university')
                                    <a href="/universities/{{ $university->id }}/edit" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="/universities/{{ $university->id }}/programs" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-newspaper"></i>
                                    </a>
                                    <a href="/universities/{{ $university->id }}/delete" id="deleteUniversity" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    @endif
                                    <a href="/universities/{{ $university->id }}/view" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                </div>
                            </div>
                            <div class="card-footer bg-light border-dark border-3">
                                <small class="text-body">
                                    <i class="fa-solid fa-clock"></i> {{ $university->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#about'))
            .catch(error => {
                console.error(error);
            });
    </script>
</section>