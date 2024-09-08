<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Laravel</h1>
    </header>

    <nav>
        @include('navbar')
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>
