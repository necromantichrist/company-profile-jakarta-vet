<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite('resources/css/admin.css')
</head>
<body>

<header class="admin-topbar">
    <div class="topbar-container">
        
        <div class="admin-brand">
            <span></span> Jakarta Top Dogs - Admin Panel
        </div>

        <nav class="admin-nav">
            <ul class="nav-links">
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="/admin/dashboard">Dashboard</a>
                </li>
                <li class="{{ Request::is('admin/news*') ? 'active' : '' }}">
                    <a href="{{ route('news.index') }}">News</a>
                </li>
                <li>
                    <a href="/" target="_blank" class="nav-external">View Website ↗</a>
                </li>
            </ul>
        </nav>

        <div class="admin-user-actions">
            <form method="POST" action="{{ route('logout') }}" class="m-0">
                @csrf
                <button type="submit" class="btn-minimal-logout">
                    Logout
                </button>
            </form>
        </div>

    </div>
</header>

<div class="admin-main-wrapper">
    <main class="content-container">
        @yield('content')
    </main>
</div>

</body>
</html>