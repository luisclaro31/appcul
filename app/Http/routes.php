<?php
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*Route::get('/', function () {
    return view('auth.login');
});
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['prefix' => 'student', 'middleware' => ['web'], 'namespace' => 'App'],
    function () {
        Route::resource('data_update','DataUpdateController');
});
Route::group(['prefix' => 'student', 'middleware' => ['web', 'data_update'], 'namespace' => 'App' ],
    function() {
        Route::resource('email','EmailController');
        Route::resource('rating','RatingController');
    });

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});

Route::group(['middleware' => ['web', 'data_update']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
});