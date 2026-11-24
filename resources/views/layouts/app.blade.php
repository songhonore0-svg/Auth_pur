<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Auth Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="{{ auth()->check() ? 'is-auth' : 'is-guest' }}">

    @auth
        <nav class="navbar">
            <span class="brand">AuthApp</span>
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profil</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">Déconnexion</button>
            </form>
        </nav>
    @endauth

    <main class="page">
        <div class="card">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </main>

</body>
</html>