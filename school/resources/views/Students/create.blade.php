<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="{{ asset('css/form-styles.css') }}">
</head>
    <body>
        <h1>Student Registration</h1>

        <!-- Display Success Message -->
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <!-- Student Form -->
        <div class="form-container">
            <form action="/students" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number" required>

                <label for="school">School:</label>
                <input type="text" id="school" name="school" required>

                <button type="submit">Submit</button>
            </form>
        </div>

        <!-- Include the Students Table -->
        @include('students.student_table')
    </body>
</html>
