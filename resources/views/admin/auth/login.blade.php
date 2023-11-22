<!-- resources/views/admin/auth/login.blade.php -->

<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ old('email') }}" required autofocus>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
