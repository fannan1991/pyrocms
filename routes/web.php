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

Route::get('/home', 'HomeController@index');
Route::post('/home/test', 'HomeController@test');
Route::post('/home/register', 'HomeController@register');
Route::post('/home/register-client', 'HomeController@registerClient');
Route::post('/home/access-token', 'HomeController@accessToken');
Route::post('/home/login', 'HomeController@login');
Route::post('/home/forget-password', 'HomeController@forgetPassword');

Route::group(["middleware" => 'user-auth'], function () {
    Route::post('/home/change-password', 'HomeController@changePassword');
    Route::POST('/home/personal-information', 'HomeController@personalInformation');
    Route::post('/home/verified', 'HomeController@verified');
    Route::post('/home/first-customer', 'HomeController@firstCustomer');
    Route::post('/home/second-customer', 'HomeController@secondCustomer');
    Route::post('/home/three-customer', 'HomeController@threeCustomer');
    Route::post('/home/grade', 'HomeController@grade');
    Route::post('/home/integral', 'HomeController@integral');
    Route::post('/home/gold', 'HomeController@gold');
});






$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('/hello/', function () {
        return "hello";
    });
});
