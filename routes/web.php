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

Route::get('/dashboard', 'SiteController@index')->name('frontend.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin area
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	
	// Route::get('/', function(){
	// 	return view('backend.index');
	// })->name('backend.index');

	Route::get('/', 'AdminController@index')->name('backend.index');

	Route::resource('manager', 'ManagersController');
	Route::resource('sales', 'SalesController');

});
