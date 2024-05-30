<section>
    <div class="container-fluid">
        <div class="row container-fluid mx-auto py-lg-4">
            <div class="col-12 pb-4">
                <div class="card">
                    <div class="card-body mt-5 pt-4">
                        <p><span class="badge bg-primary">{{ $this->user->type }}</span></p>
                        <h1 class="h1 fs-2">Manage Program Requirements</h1>
                        <p class="text-muted text-capitalize">Manage entry requirments for <strong>{{$program->name}}</strong> on <strong>{{$university->name}}</strong>.</p>
                        <form wire:submit="save">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    @include('layouts.error')
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="module" id="module" class="form-control" placeholder="Maths" wire:model="module" autocomplete="off" required>
                                        <label for="module">Module or Subject</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group form-floating mb-3">
                                        <input type="hidden" name="program_id" value="{{$program->id}}" wire:model="programId">
                                        <input type="text" name="grades" id="grades" class="form-control" placeholder="250.00" autocomplete="off" wire:model="grades" required>
                                        <label for="grades">Allowed Grades</label>
                                        <p class="text-muted small">* Should be a comma separated list</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="form-control btn btn-lg btn-dark submit px-3 mb-3" wire:click="save">Add Requirement</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    @foreach($requirements as $requirement)
                    <div class="col-md-6 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="text-muted mb-0 fs-6">{{$requirement->module}}</p>
                                <h2 class="card-title fs-5 pt-1">
                                    @php $grades = explode(',',$requirement->grades) @endphp
                                    @foreach($grades as $grade)
                                    <span class="badge bg-primary">{{$grade}}</span>
                                    @endforeach
                                </h2>
                            </div>
                            <div class="card-footer bg-light border-dark border-3">
                                <small class="text-body">
                                    <i class="fa-solid fa-clock"></i>
                                    {{ $requirement->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>