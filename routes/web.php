<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/apply', function () {
    return view('loanapplication');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@home');

Route::get('login', 'HomeController@login');
Route::get('signup', 'HomeController@signup');

Auth::routes();
Route::get('/users', 'UserController@index');
Auth::routes();
Route::get('/users/create', 'UserController@create');

Route::post('/users/store', 'UserController@store');


/*

*  Routes for all the loan application submission
*
*/
Route::get('/loan/credit', 'LoanController@credit');

Route::get('/loan/property', 'LoanController@property');

Route::get('/loan/borrower', 'LoanController@borrower');

Route::get('/loan/entity', 'LoanController@entity');

Route::get('/loan/borroweremployment', 'LoanController@borroweremployment');

Route::get('/loan/schedule', 'LoanController@schedule');

Route::get('/loan/signers', 'LoanController@signers');

Route::get('/loan/acknowledgement', 'LoanController@acknowledgement');