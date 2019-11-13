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

Route::group([
		'prefix' => 'admin',
		'namespace' => 'admin',
		'middleware' => 'checkAdmin',
	], function(){
		Route::get('/', 'AdminController@index');
		Route::resource('/testimonials', 'TestimonialController');
});

Route::get('/', 'HomeController@index');
Route::get('/checkAdmin', 'HomeController@checkAdmin');
Route::post('/logout', 'HomeController@logout');
Route::post('/login-admin', 'HomeController@isAdmin');
Route::post('/callback', 'HomeController@callback');
Route::get('/review-form', 'HomeController@reviewForm');
Route::post('/set-review', 'HomeController@saveNewReview');
Route::post('/data-save', 'HomeController@dataSave');

/*Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');*/
