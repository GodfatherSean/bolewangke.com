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
    return view('welcome', ['videos' => \App\Video::all()->where('public', true)]);
})->name('welcome');

Route::get('about', function () {
    return view('about');
})->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('teacher', 'TeacherController')->only(['index', 'show']);

Route::resource('video', 'VideoController')->only(['index', 'show']);
