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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');
// Route::get('/users/{id}', function ($id) {
//     return 'This is user ' . $id;
// });

Route::get('/', 'PagesController@index');

//this automatically gives routes for every functiojn form our postcontroller
Route::resource('posts', 'PostsController');






//this is automatically created when i run php artisan make:auth 
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
