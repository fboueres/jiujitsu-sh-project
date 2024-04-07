<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));
Route::resource('students', StudentController::class);
