<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students/create', [StudentController::class, 'create']); // Show form and table
Route::post('/students', [StudentController::class, 'store']);        // Store new student
Route::get('/students/{id}/edit', [StudentController::class, 'edit']); // Show edit form
Route::put('/students/{id}', [StudentController::class, 'update']);   // Update student
Route::delete('/students/{id}/delete', [StudentController::class, 'destroy']); // Delete student
