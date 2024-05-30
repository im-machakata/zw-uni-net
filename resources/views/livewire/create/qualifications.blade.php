    <div class="container-fluid">
        <div class="row container-fluid mx-auto">
            <div class="col-12 card py-lg-4">
                <div class="card-body mt-5 pt-4">
                    <h1 class="h1 fs-2">My Qualifications</h1>
                    <p class="text-muted">Tell Us More About Your Qualifications</p>
                    <form wire:submit="save">
                        @csrf
                        <div class="row mb-0">
                            <div class="col-12">
                                @include('layouts.error')
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group form-floating mb-3 mb-lg-0">
                                    <input type="text" name="name" id="module" class="form-control" placeholder="Module" autocomplete="off" wire:model="module" required>
                                    <label for="module">Module</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group form-floating mb-3 mb-lg-0">
                                    <input type="text" name="grade" id="grade" class="form-control" placeholder="Grade eg. A, B, Distinction" wire:model="grade" autocomplete="off" required>
                                    <label for="grade">Grade</label>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="form-control btn btn-lg btn-dark submit px-3 py-3 border-0">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 pt-4 px-0">
                <div class="row g-2">
                    @foreach($qualifications as $qualification)
                    <div class="col-lg-3">
                        <div class="card" wire:key="{{$qualification->id}}">
                            <div class="card-body d-flex">
                                <div class="qualification">
                                    <p class="text-muted mb-0">Module or subject</p>
                                    <h2 class="card-title fs-5">{{$qualification->module}}</h2>
                                </div>
                                <div class="grade ms-auto">
                                    <p class="text-muted"></p>
                                    <kbd class="text-white fs-5">{{$qualification->grade}}</kbd>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-dark" wire:click="destroy({{$qualification->id}})">Delete</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>