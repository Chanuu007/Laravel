<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route for displaying the student form and student list
Route::get('/students', [StudentController::class, 'create']); // Show form and students list

// Route for storing the student data after form submission
Route::post('/students', [StudentController::class, 'store']); // Store form data
