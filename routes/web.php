<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ClassesController;
use \App\Http\Controllers\SubjectsController;
use \App\Http\Controllers\CourseRqsController;

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

Route::get('/', function () {
    return view('layout');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
//User
Route::get('/user',[UserController::class,'getListUser']);
Route::post('/admin',[UserController::class,'addAdmin']);
Route::put('/admin/{id}',[UserController::class,'updateAdmin']);
Route::delete('/admin/{id}',[UserController::class,'deleteAdmin']);
Route::post('/user/search',[UserController::class,'searchUser']);
Route::post('/login',[UserController::class,'loginAccount']);
//Class
Route::get('/class',[ClassesController::class,'getListClass']);
Route::post('/class',[ClassesController::class,'addClass']);
Route::put('/class/{id}',[ClassesController::class,'updateClass']);
Route::delete('/class/{id}',[ClassesController::class,'deleteClass']);
Route::post('/class/search',[ClassesController::class,'searchClass']);

//Subject
Route::get('/subject',[SubjectsController::class,'getListSubject']);
Route::post('/subject',[SubjectsController::class,'addSubject']);
Route::put('/subject/{id}',[SubjectsController::class,'updateSubject']);
Route::delete('/subject/{id}',[SubjectsController::class,'deleteSubject']);
Route::post('/subject/search',[SubjectsController::class,'searchSubject']);

//CourseRqs
Route::get('/courseRqs',[CourseRqsController::class,'getListCourseRqs']);
Route::post('/courseRqs',[CourseRqsController::class,'addCourseRqs']);
Route::put('/courseRqs/{id}',[CourseRqsController::class,'updateCourseRqs']);
Route::delete('/courseRqs/{id}',[CourseRqsController::class,'deleteCourseRqs']);
Route::post('/courseRqs/search',[CourseRqsController::class,'searchCourseRqs']);


