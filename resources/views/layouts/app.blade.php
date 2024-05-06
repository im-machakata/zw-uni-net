<!DOCTYPE html>
<html lang="en">

<meta name="author" content="Knowledge">
<meta name="description" content="Find your next university with Unimap, e-map for seniors">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/static/css/bootstrap.min.css?version=5.3.3">
<link rel="stylesheet" href="/static/css/style.css?version={{ filemtime(public_path('static/css/style.css')) }}">
<title>@yield('title','Uni Map')</title>
</head>

<body>

    <main>
        @extends('layouts.nav')
        @yield('content')
        @extends('layouts.footer')
    </main>
</body>

<script src="/static/js/jquery.3.7.1.min.js" defer></script>
<script src="/static/js/bootstrap.bundle.min.js?version=5.3.3" defer></script>
<script src="/static/js/app.js" defer></script>

</html>