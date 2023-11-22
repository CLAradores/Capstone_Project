{{-- <label for="contact_number" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
<input type="text" id="contact_number" name="contact_number" placeholder="0012 345 6789" value="{{ old('contact_number') }}" class="w-full border rounded px-3 py-2" required>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneNumberInput = document.getElementById('phoneNumber');

        phoneNumberInput.addEventListener('input', function(event) {
            const inputValue = event.target.value;
            const cleanedValue = inputValue.replace(/\s/g, '');
            const formattedValue = cleanedValue.replace(/(.{4})/g, '$1 ');

            event.target.value = formattedValue.trim();
        });
    });
</script> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Other head elements -->

    <!-- Add the following lines for JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Other body elements -->
    <label for="contact_number" class="block text-gray-700 text-sm font-bold mb-2">Contact Number</label>
<input type="text" id="phoneNumber"" name="contact_number" placeholder="0012 3453 789" value="{{ old('contact_number') }}" class="w-full border rounded px-3 py-2" required>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneNumberInput = document.getElementById('phoneNumber');

        phoneNumberInput.addEventListener('input', function(event) {
            const inputValue = event.target.value;
            const cleanedValue = inputValue.replace(/\s/g, '');
            const formattedValue = cleanedValue.replace(/(.{4})/g, '$1 ');

            event.target.value = formattedValue.trim();
        });
    });
</script>

</body>
</html>