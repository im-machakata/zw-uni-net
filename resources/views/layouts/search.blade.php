<form action="/search" method="get" class="mt-2">
    <div class="row bg-light py-2 round-off">
        <div class="col-8 col-lg-10">
            <input type="search" name="q" class="form-control form-control-lg w-100 border-0" placeholder="Which Program(s) Are You Interested In? " value="{{ $query ?? '' }}" required>
        </div>
        <div class="col-4 col-lg-2">
            <button type="submit" class="btn btn-dark w-100 btn-lg rounded-2 text-uppercase">find</button>
        </div>
    </div>
</form>