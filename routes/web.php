<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>['auth', 'tcm']], function()
{
    Route::get('/dashboard', function () 
    {
        return view('admin.dashboard');
    });
    
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::get('/kit-edit/{id}', 'Admin\Manage_Kit@registeredit');
    Route::put('role-register-update/{id}','Admin\DashboardController@registerupdate');
    Route::put('/kit-update/{id}','Admin\Manage_Kit@registerupdate');
    Route::get('/manage_kit','Admin\Manage_Kit@index');
    Route::get('/regist_test_centre','Admin\regist_centre@index');
    Route::post('/save-centre','Admin\regist_centre@store');
    Route::post('/save-kit', 'Admin\Manage_Kit@store');
    Route::get('/tester', 'Admin\tester_control@index');
    Route::post('/new-tester', 'Admin\tester_control@store');
    Route::delete('tester-delete/{id}', 'Admin\tester_control@delete');
});

Route::group(['middleware'=>['auth', 'tester']], function()
{
    Route::get('/testerdashboard', function()
    {
        return view('tester.testerdashboard');
    });
    Route::get('/managetest', 'Tester\ManageTestController@index');
    Route::post('/save-test', 'Tester\ManageTestController@store');
    Route::get('/manage-test/{id}', 'Tester\ManageTestController@edit');
    Route::put('/test-update/{id}', 'Tester\ManageTestController@update');
    Route::delete('test-delete/{id}', 'Tester\ManageTestController@delete');

});

Route::group(['middleware'=>['auth', 'patient']], function()
{
    Route::get('/patientdashboard', function()
    {
        return view('patient.patientdashboard');
    });
    Route::get('/test-registered', 'Patient\PDashboardController@registered');
});