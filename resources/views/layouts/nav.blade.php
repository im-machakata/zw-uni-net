<nav class="navbar navbar-expand-lg shadow-md bg-white fixed-top border-bottom border-dark shadow-sm" aria-label="Navigation menu">
    <div class="container-fluid px-lg-5 justify-content-start justify-content-lg-center mx-auto">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand fw-bold col-lg-3 ps-3 d-lg-block" href="/">Unimap</a>
        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between" id="navigation">
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item ps-lg-5 ms-lg-5">
                    <a class="nav-link" href="/search">Search</a>
                </li>
                @if(session()->get('user') && session()->get('user')->type === 'university')
                <li class="nav-item">
                    <a class="nav-link" href="/universities">Universities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/messages">Messages</a>
                </li>
                @endif
                @if(session()->get('user') && session()->get('user')->type === 'student')
                <li class="nav-item">
                    <a class="nav-link" href="/qualifications">My Qualifications</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
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