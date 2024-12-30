<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show the form and table
    public function create()
    {
        $students = Student::where('status', 'active')->get(); // Fetch all students
        return view('students.create', compact('students'));
    }

    // Store a new student
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'school' => 'required|string|max:255',
        ]);

        // Save the student
        Student::create($validated);

        // Redirect with success message
        return redirect('/students/create')->with('success', 'Student registered successfully!');
    }

    // Show the edit form
    public function edit($id)
    {
        $student = Student::findOrFail($id); // Find student by ID or fail
        return view('students.edit', compact('student'));
    }

    // Update student details
    public function update(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'school' => 'required|string|max:255',
        ]);

        // Find the student and update
        $student = Student::findOrFail($id);
        $student->update($validated);

        // Redirect with success message
        return redirect('/students/create')->with('success', 'Student updated successfully!');
    }

    // Delete a student (change status to "deleted")
    public function destroy($id)
    {
        // Find the student and update status
        $student = Student::findOrFail($id);
        $student->update(['status' => 'deleted']);

        // Redirect with success message
        return redirect('/students/create')->with('success', 'Student marked as deleted.');
    }
}
