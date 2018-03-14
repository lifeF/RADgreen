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



Route::GET(' home/{home}/visit', 'HomeController@visit')->name('home.visit');
Route::POST(' home/{home}/visit', 'HomeController@section')->name('home.section');
Route::GET(' home/{home}/visit/{visit}', 'HomeController@visitPlant')->name('home.visitPlant');
Route::POST(' home/{home}/visit/{visit}', 'HomeController@storePlant')->name('home.storePlant');
Route::GET('home/{home}/visit/{visit}/create_Plant', 'HomeController@createPlant')->name('home.createPlant');
Route::resource('home', 'HomeController');
Route::GET('admin/home','AdminController@index');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

