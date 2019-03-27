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

//make the controller using php artisan make:controller ProjectsController
Route::get('/projects', 'ProjectsController@index');

//Route::get('/admin', 'AdminController@login');

Route::match(['get','post'], '/admin', 'AdminController@login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* authentication and protection of admin routes using middleware*/
Route::group(['middleware' => ['auth']], function() {
     Route::get('/admin/dashboard', 'AdminController@dashboard');
     Route::match(['get','post'], '/admin/addCategory', 'CategoryController@addCategory');
     Route::get('/admin/settings', 'AdminController@settings');
     Route::get('/admin/checkpwd', 'AdminController@checkpwd');
    Route::match(['get','post'], '/admin/updatepwd', 'AdminController@updatepwd');
});

Route::get('/logout', 'AdminController@logout');


