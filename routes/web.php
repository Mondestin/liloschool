<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrimaryStudentController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

//Home
Route::resource('home',HomeController::class);


// ---------------PRIMARY ROUTES-----------------------------
Route::prefix('primary')->group(function () {
   

// STUDENTS
// Route::resource('students',PrimaryStudentController::class);
Route::get('students', [PrimaryStudentController::class, 'index'])->name('primary.students.index');
Route::get('students/registration', [PrimaryStudentController::class, 'create'])->name('primary.students.create');
 });