<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\AuthenticationController;

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

// Student ------------------------------------------
// Create
Route::get('/creation/student', [StudentController::class, 'create']);
Route::post('/creation/student', [StudentController::class, 'store'])->name('student.store');
//Read
Route::get('/show/student', [StudentController::class, 'show']);
// Update
Route::get('/update/student/{id}', [StudentController::class, 'updateView']);
Route::post('/update/student/{id}', [StudentController::class, 'update'])->name('student.update');
// Delete
Route::post('/delete/student/{id}', [StudentController::class, 'delete'])->name('student.delete');

// Tutor ------------------------------------------
// Create
Route::get('/creation/tutor', [TutorController::class,'create']);
Route::post('/creation/tutor', [TutorController::class, 'store'])->name('tutor.store');
//Read
Route::get('/show/tutor', [TutorController::class, 'show']);
// Update
Route::get('/update/tutor/{id}', [TutorController::class, 'updateView']);
Route::post('/update/tutor/{id}', [TutorController::class, 'update'])->name('tutor.update');
// Delete
Route::post('/delete/tutor/{id}', [TutorController::class, 'delete'])->name('tutor.delete');

// Enterprise ------------------------------------------
// Create
Route::get('/creation/enterprise', [EnterpriseController::class,'create']);
Route::post('/creation/enterprise', [EnterpriseController::class,'storeEnterprise'])->name('enterprise.store');
Route::post('/creation/contact', [EnterpriseController::class,'storeContact'])->name('contact.store');
Route::post('/creation/site', [EnterpriseController::class,'storeSite'])->name('site.store');
//Read
Route::get('/show/enterprises', [EnterpriseController::class, 'show']);
//Update
Route::get('/update/enterprise/{id}', [EnterpriseController::class, 'updateView']);
Route::post('/update/enterprise/{id}', [EnterpriseController::class, 'updateEnterprise'])->name('enterprise.update');
Route::post('/update/contact/{id}', [EnterpriseController::class, 'updateContact'])->name('contact.update');
Route::post('/update/site/{id}', [EnterpriseController::class, 'updateSite'])->name('site.update');
//Delete

// Sector ------------------------------------------
// Create
Route::get('/creation/sector', [SectorController::class,'create']);
Route::post('/creation/sector', [SectorController::class, 'store'])->name('sector.store');
//Read
Route::get('/show/sector', [SectorController::class, 'show']);
// Update
Route::get('/update/sector/{id}', [SectorController::class, 'updateView']);
Route::post('/update/sector/{id}', [SectorController::class, 'update'])->name('sector.update');

//authentication --------------------------------
//Route::get('/login', function(){ return view('sign-in');});
Route::get('/login', [AuthenticationController::class, 'view']);
Route::post('/login', [AuthenticationController::class, 'store'])->name('authenticate.store');
Route::get('/disconnect', [authenticationController::class, 'disconnect']);
