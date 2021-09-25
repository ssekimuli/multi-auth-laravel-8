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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*adm group*/
Route::group(['middleware' => 'is_admin'], function () {
Route::get('/dash', 'trailController@dash')->name('dash');

/*adm group*/

});
Route::group(['middleware' => 'is_teacher'], function () {
Route::get('/teacher', 'trailController@teacher')->name('teacher');	
Route::get('/detail', 'trailController@detail')->name('detail');
});
	
Route::get('/student', 'trailController@student')->name('student');


