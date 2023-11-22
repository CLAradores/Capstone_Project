
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <!-- Regular User Links -->
<a href="{{ route('login') }}">User Login</a>
<a href="{{ route('register') }}">User Register</a>

<!-- Admin Links -->
<a href="{{ route('admin.login') }}">Admin Login</a>
<a href="{{ route('admin.register') }}">Admin Register</a>

</body>
</html>