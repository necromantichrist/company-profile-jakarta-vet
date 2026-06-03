<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakarta Top Dogs</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
    
</head>
<body>

    <nav class="navbar">

    <div class="logo">
        <span>Jakarta Top Dogs</span>
    </div>

    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/service">Service</a></li>
        <li><a href="/news">News</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>

    <div class="nav-right">
        <a href="/login" class="btn-login">Login</a>
    </div>

</nav>

    <main>
        @yield('content')
    </main>

</body>
</html>