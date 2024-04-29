<nav class="navbar navbar-expand-lg bg-white fixed-top border-bottom border-dark border-4" aria-label="Navigation menu">
    <div class="container-fluid px-lg-5 justify-content-start justify-content-lg-center mx-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold col-lg-3 ps-3 d-lg-block" href="/">Unimap</a>
        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between" id="navigation">
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item ps-lg-5 ms-lg-5">
                    <a class="nav-link" href="/search">Universities</a>
                </li>
                @if(session()->get('user') && session()->get('user')->type == 'university')
                <li class="nav-item">
                    <a class="nav-link" href="/admissions">Admissions</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/my-admissions">Admissions</a>
                </li>
                @endif
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