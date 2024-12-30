<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show the form
    public function create()
    {
        return view('student_form');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'school' => 'required|string|max:255',
        ]);

        // Save the data
        Student::create($validated);

        // Redirect or return a response
        return redirect('/students/create')->with('success', 'Student registered successfully!');
    }
}
