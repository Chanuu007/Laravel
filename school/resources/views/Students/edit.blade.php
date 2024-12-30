<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
    <body>
        <h1>Edit Student</h1>
        <form action="/students/{{ $student->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $student->name }}" required><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $student->phone_number }}" required><br><br>

            <label for="school">School:</label>
            <input type="text" id="school" name="school" value="{{ $student->school }}" required><br><br>

            <button type="submit">Update</button>
        </form>
    </body>
</html>
