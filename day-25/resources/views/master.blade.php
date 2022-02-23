<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">{->SHOFI<-}</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="nav-link text-white">Add Student</a></li>
                <li><a href="{{ route('add-blog') }}" class="nav-link text-white">Add Blogs</a></li>
                <li><a href="" class="nav-link text-white">Manage Student</a></li>
                <li><a href="" class="nav-link text-white">Login</a></li>
            </ul>
        </div>
    </nav>

@yield('body')

<script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.js') }}"></script>
</body>
</html>
