<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <!-- Link the external CSS -->
    <link rel="stylesheet" href="{{ asset('css/form-styles.css') }}">
</head>
<body>
    <h1>Student Registration</h1>
    <form action="/students" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required><br><br>

        <label for="school">School:</label>
        <input type="text" id="school" name="school" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
