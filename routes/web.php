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

Route::get('/main', function () {
    return view('main');
});

Route::group(['middleware' => 'auth', 'admin'], function () {
  Route::get('/dashboard', 'HomeController@index');
  Route::get('/dashboard/clinics','Admin\ClinicsController@index');
  Route::get('/dashboard/clinics/create','Admin\ClinicsController@create');
  Route::post('/dashboard/clinics/create','Admin\ClinicsController@store');
  Route::get('/dashboard/clinics/{id}/edit','Admin\ClinicsController@edit');
  Route::get('/dashboard/clinics/{id}/show','Admin\ClinicsController@show');

  Route::get('/dashboard/doctors','Admin\DoctorsController@index');
  Route::get('/dashboard/doctors/create','Admin\DoctorsController@create');
  Route::post('/dashboard/doctors/create','Admin\DoctorsController@store');
  Route::get('/dashboard/doctors/{id}/edit','Admin\DoctorsController@edit');
  Route::get('/dashboard/doctors/{id}/show','Admin\DoctorsController@show');

  Route::get('/dashboard/orders','Admin\OrdersController@index');
  Route::get('/dashboard/orders/create','Admin\OrdersController@create');
  Route::post('/dashboard/orders/create','Admin\OrdersController@store');
  Route::get('/dashboard/orders/{id}/edit','Admin\OrdersController@edit');
  Route::get('/dashboard/orders/{id}/show','Admin\OrdersController@show');
});


Auth::routes();


