<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(StudentController::class)->prefix('students')->group(function () {
    Route::get('/', 'index');                
    Route::get('/{studentId}', 'show');      
});
