<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Input with Slashes</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>


<label ffor="dateInput" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth</label>
<input type="text" id="dateInput" name="date_of_birth" placeholder="MM/DD/YYYY" value="{{ old('date_of_birth') }}" class="w-full border rounded px-3 py-2" required>

<script>
    $(document).ready(function() {
        $('#dateInput').on('input', function() {
            const inputValue = $(this).val();
            const cleanedValue = inputValue.replace(/\//g, ''); // Remove existing slashes
            const formattedValue = cleanedValue.replace(/(\d{2})(\d{0,2})(\d{0,4})/, function(match, p1, p2, p3) {
                if (!p2 && !p3) {
                    return p1;
                } else if (p2 && !p3) {
                    return p1 + '/' + p2;
                } else {
                    // Limit the year to 4 digits
                    const limitedYear = p3 ? p3.slice(0, 4) : '';
                    return p1 + '/' + p2 + '/' + limitedYear;
                }
            });

            // Update the value
            $(this).val(formattedValue);

            // Disable further input if the year has reached the limit
            const yearIndex = formattedValue.lastIndexOf('/') + 1;
            if (yearIndex > 0 && formattedValue.substring(yearIndex).length >= 4) {
                this.selectionStart = this.selectionEnd = yearIndex + 4;
            }
        });
    });
</script>

</body>
</html>