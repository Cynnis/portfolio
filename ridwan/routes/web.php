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

// Route::get('/', function () {
//     //return view('welcome');
//     return('hello World');
// });

Route::get('/home', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/projects', 'PagesController@projects');

Route::resource('posts', 'PostController');