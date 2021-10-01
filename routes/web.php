<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [DemoController::class, "index"]);

Route::get("/", [StudentController::class, "getAllStudents"]);
Route::get("/students", [StudentController::class, "getAllStudents"]);

/* Route::post("editStudent", [StudentController::class, "showStudent"]);
Route::get("/edit_student/{id}", function ($id) {
    return view("edit_student", ["id" => $id]);
}); */

Route::get('edit_student/{id}', [StudentController::class, "showData"]);
Route::post("edit_student", [StudentController::class, "editStudent"]); // Cannot show url after action post method

Route::view("add_student", "add_student");
Route::post("addStudent", [StudentController::class, "addStudent"]); // Cannot show url after action post method

Route::get("delete_student/{id}", [StudentController::class, "deleteStudent"]);

Route::get("delete_all_student", [StudentController::class, "deleteAllStudent"]);
