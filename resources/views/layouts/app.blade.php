<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Study Hub')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <aside class="sidebar">

        <div class="brand">
            <h2>Study Hub</h2>
            <p>Learn. Grow. Achieve.</p>
        </div>

        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>

        <div class="sidebar-footer">
            <p>© 2026 Study Hub</p>
        </div>

    </aside>

    <main class="main-content">

        @yield('content')

    </main>

</body>
</html>