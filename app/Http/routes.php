<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('Home','MainController@index');

Route::get('Portfolio', 'TweetsController@show');

//Route::get('home', 'HomeController@index');

Route::get('Tweets','MainTweetsController@index');


Route::get('Blog','BlogController@index');







Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




Route::get('tweets/{michael}',function($michael) {

return  ($michael) ;

});



