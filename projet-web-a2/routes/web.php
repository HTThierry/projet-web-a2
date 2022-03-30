<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('index');});
<<<<<<< Updated upstream
// Student ------------------------------------------
// Create
Route::get('/creation/student', [StudentController::class, 'create']);
=======
// Student
Route::get('/creation/student', [StudentController::class, 'index']);
>>>>>>> Stashed changes
Route::post('/creation/student', [StudentController::class, 'store'])->name('student.store');
// Update
Route::get('/update/student/{id}', [StudentController::class, 'updateView']);
Route::post('/update/student/{id}', [StudentController::class, 'update'])->name('student.update');
// Delete
Route::post('/delete/student/{id}', [StudentController::class, 'delete'])->name('student.delete');
