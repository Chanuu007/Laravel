<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create()
    {
        //return view('student_form');
        $students = Student::all(); // Fetch all students
        return view('students.create', compact('students')); // Return the form and the student list
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
        return redirect('/students')->with('success', 'Student registered successfully!');
    }
}
