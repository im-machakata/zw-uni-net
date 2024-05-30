<section>
    <div class="container-fluid">
        <div class="row container-fluid mx-auto py-lg-4">
            <div class="col-12 pb-4">
                <div class="card">
                    <div class="card-body mt-5 pt-4">
                        <p><span class="badge bg-primary">{{ $this->user->type }}</span></p>
                        <h1 class="h1 fs-2">Manage Programs</h1>
                        <p class="text-muted text-capitalize">Manage programs for this institution.</p>
                        <form wire:submit="save">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    @include('layouts.error')
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <div class="form-group form-floating mb-3">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Information Systems" wire:model="name" autocomplete="off" required>
                                        <label for="name">Program Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group form-floating mb-3">
                                        <input type="hidden" name="university_id" value="{{$university_id}}" wire:model="id">
                                        <input type="number" name="price" id="price" class="form-control" placeholder="250.00" autocomplete="off" wire:model="price" required>
                                        <label for="price">Program Price</label>
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
                    @foreach($programs as $program)
                    <div class="col-md-6 col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h2 class="card-title fs-5">{{$program->name}}</h2>
                            </div>
                            <div class="card-footer bg-light border-dark border-3">
                                <small class="text-body">
                                    <i class="fa-solid fa-clock"></i>
                                    {{ $program->created_at->diffForHumans() }}
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