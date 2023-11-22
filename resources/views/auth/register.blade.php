<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHC Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-2xl w-full max-w-md">
        <h2 class="text-3xl font-semibold mb-6 text-center">Barangay Health Center Signup</h2>

        @if(session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
        <script>
            setTimeout(function () {
                window.location.href = '{{ url('/appointment/index') }}'; // Replace '/dashboard' with the actual URL of your user dashboard
            }, 3000); // Redirect after 3 seconds (adjust as needed)
        </script>
        @endif

        @if($errors->any())
        <ul class="text-red-500">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ url('/register') }}"  class="space-y-4 grid grid-cols-2 gap-4">
            @csrf
    
            <div>
                <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="w-full border rounded px-3 py-2" required>
            </div>
    
            <div>
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="w-full border rounded px-3 py-2" required>
            </div>
    
            <div>
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2">Gender</label>
                <select id="gender" name="gender" class="w-full border rounded px-3 py-2" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
    
            <div>
                <label for="date_of_birth" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth</label>
                <input type="text" id="date_of_birth" name="date_of_birth" placeholder="mm/dd/yyyy" value="{{ old('date_of_birth') }}" class="w-full border rounded px-3 py-2" required>
            </div>
    
            <div>
                <label for="contact_number" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" placeholder="0012 345 6789" value="{{ old('contact_number') }}" class="w-full border rounded px-3 py-2" required>
            </div>
    
            <div>
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2" required>
            </div>
    
            <div>
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>
    
            <div>
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
            </div>
            
            <div class="col-span-2">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 w-full">Submit</button>
            </div>
            
        </form>

        <p class="text-center mt-4">Already have an account? <a href="{{ url('/login') }}"
                class="text-green-600">Login</a></p>
    </div>

</body>

</html>
