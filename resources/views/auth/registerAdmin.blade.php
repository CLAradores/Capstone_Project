<!-- resources/views/auth/register.blade.php -->

@extends('layout')

@section('content')
    <div class="min-h-screen flex items-center justify-center shadow-xl">
        <div class="bg-white p-8 rounded shadow-2xl w-96">
            <h2 class="text-3xl font-semibold mb-6 text-center">Sign up as an admin</h2>
            <form method="POST" action="{{ route('admin.register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border rounded px-3 py-2" />
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 w-full">Sign Up as Admin</button>
            </form>
            <hr class="my-6 border-t border-gray-300" />
            <div class="text-center">
                <p class="text-sm text-gray-600">
                    Already have an account? <a href="{{ route('login') }}" class="text-green-600">Log In</a>
                </p>
            </div>
        </div>
    </div>
@endsection
