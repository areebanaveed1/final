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
    return view('welcome');
});
Route::get('/working', function () {
    return view('work');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/meeting', function () {
    return view('meeting');
});
Route::get('/todo', function () {
    return view('todo');
});
Route::get('/meal', function () {
    return view('meal');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/lecture', function () {
    return view('lecture');
});
Route::get('/all', function () {
    return view('all');
});
Route::get('/image', function () {
    return view('image');
});
Route::get('/audio', function () {
    return view('audio');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/share', function () {
    return view('share');
});
Route::post('uploadimage', 'ImageController@index');
Route::post('uploadvideo', 'VideoController@upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
