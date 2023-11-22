
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <!-- Add your stylesheets, scripts, etc. here -->
</head>
<body>
    <div class="container">
        <header>
            <!-- Add your header content here -->
        </header>

        <nav>
            <!-- Add your navigation/menu content here -->
        </nav>

        <main>
            @yield('content')
        </main>

        <footer>
            <!-- Add your footer content here -->
        </footer>
    </div>
</body>
</html>