<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Your App Title</title>
</head>
<body>
    <header>
        <!-- Здесь может быть шапка сайта -->
    </header>

    <nav>
        <!-- Здесь может быть навигация -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Здесь может быть подвал сайта -->
    </footer>
</body>
</html>