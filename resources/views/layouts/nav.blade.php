<nav class="navbar navbar-expand-lg bg-white fixed-top border-bottom border-dark border-4" aria-label="Thirteenth navbar example">
    <div class="container-fluid px-lg-5 justify-content-start justify-content-lg-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold col-lg-3 ps-2 d-lg-none" href="/">Unimap</a>
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand fw-bold col-lg-3 me-0" href="/">Unimap</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="/universities">Universities</a>
                </li>
            </ul>
            @if(!session()->get('user'))
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <a class="btn btn-outline-dark" href="/login">Login</a>
                <a class="btn btn-dark ms-lg-2" href="/register">Register</a>
            </div>
            @else
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <a class="btn btn-outline-dark" href="/profile">Profile</a>
                <a class="btn btn-dark ms-lg-2" href="/logout">Logout</a>
            </div>
            @endif
        </div>
    </div>
</nav>