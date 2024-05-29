<!DOCTYPE html>
<html lang="en">

<meta name="author" content="Knowledge">
<meta name="description" content="Find your next university with Unimap, e-map for seniors">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="/static/css/bootstrap.min.css?version=5.3.3">
<link rel="stylesheet" href="/static/css/bootstrap-tagsinput.css?version=f9a93ca">
<link rel="stylesheet" href="/static/css/style.css?version={{ filemtime(public_path('static/css/style.css')) }}">
<livewire:styles />
<title>@yield('title','Uni Map')</title>
</head>

<body>

    <main>
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </main>
    <script src="/static/js/jquery.3.7.1.min.js"></script>
    <script src="/static/js/bootstrap.bundle.min.js?version=5.3.3"></script>
    <script src="/static/js/bootstrap-tagsinput.min.js?version=f9a93ca"></script>
    <script src="/static/js/app.js"></script>
    <livewire:scripts />
</body>

</html>