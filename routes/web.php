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











Route::group(["middleware" => 'user-auth'], function () {




    Route::post('/home/grade', 'HomeController@grade');
    Route::post('/home/first-customer', 'HomeController@firstCustomer');

});






$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Http\Controllers'], function ($api) {
        $api->get('/index', 'HomeController@index');
        $api->get('/test','HomeController@test');
        $api->post('/register','HomeController@register');
        $api->post('/register-client','HomeController@registerClient');
        $api->post('/access-token','HomeController@accessToken');
        $api->post('/login','HomeController@login');
        $api->post('/forget-password','HomeController@forgetPassword');
        $api->get('/about','HomeController@aboutUs');
        $api->get('/loan-notice','HomeController@loanNotice');
        $api->get('/news','HomeController@news');
        $api->get('/new-detail','HomeController@newsDetail');
        $api->get('/test-qrcode','HomeController@testQrcode');


    });

    $api->group(["middleware" => 'user-auth','namespace' => 'App\Http\Controllers'], function ($api) {
        $api->post('/change-password','HomeController@changePassword');
        $api->post('/personal-information','HomeController@personalInformation');
        $api->post('/verified','HomeController@verified');
        $api->post('/first-customer','HomeController@firstCustomer');
        $api->post('/second-customer','HomeController@secondCustomer');
        $api->post('/three-customer','HomeController@threeCustomer');
        $api->post('/integral','HomeController@integral');
        $api->post('/gold','HomeController@gold');
        $api->post('/withdraw','HomeController@withdraw');
        $api->post('/withdraw-log','HomeController@withdrawLog');
        $api->post('/message','HomeController@message');
        $api->post('/loan','HomeController@loan');
        $api->post('/loan-log','HomeController@loanLog');
        $api->post('/loan-detail','HomeController@loanDetail');
        $api->post('/loan-amount','HomeController@loanAmount');
        $api->post('/repayment','HomeController@repayment');
        $api->post('/winning-log','HomeController@winningLog');
        $api->post('/ticket-use','HomeController@ticketUse');
        $api->post('/ticket-used','HomeController@ticketUsed');
        $api->post('/ticket-expired','HomeController@ticketExpired');
        $api->post('/red-envelopes','HomeController@redEnvelopes');
        $api->post('/personal-center','HomeController@personalCenter');
        $api->post('/invitation-code','HomeController@invitationCode');
        $api->post('/envelopes','HomeController@envelopes');
        $api->post('/remaining','HomeController@remaining');
    });

});
