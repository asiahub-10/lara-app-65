<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'bg-dark text-white rounded' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'bg-dark text-white rounded' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ request()->is('student*') ? 'bg-dark text-white rounded' : '' }}" href="/students">Students</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    @yield('scripts')
</body>
</html>