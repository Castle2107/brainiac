<?php

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
    return view('home');
});

Route::post('/learning-style', 'LearningStyleController@getLearningStyle')
   ->name('learning-style');

Route::post('/networks', 'NetworkController@getNetworks')
   ->name('networks');

Route::post('/professor-type', 'ProfessorController@getProfessorType')
   ->name('professor-type');

Route::post('/student-gender', 'StudentController@getStudentGender')
   ->name('student-gender');

Route::post('/student-campus', 'StudentController@getStudentCampus')
   ->name('student-campus');

Route::post('/student-style', 'StudentController@getStudentStyle')
   ->name('student-style');

Route::get('test', 'LearningStyleController@test');