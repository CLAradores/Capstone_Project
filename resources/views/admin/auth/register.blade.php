<!-- resources/views/admin/auth/register.blade.php -->

<form method="POST" action="{{ route('admin.register') }}">
    @csrf
    <!-- Add registration form fields as needed -->
    <button type="submit">Register</button>
</form>
