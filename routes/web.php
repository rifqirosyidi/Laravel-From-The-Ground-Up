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

Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get('customers', 'CustomerControllers@index');
Route::get('customers/create', 'CustomerControllers@create');
Route::get('customers/{customer}', 'CustomerControllers@show');
Route::get('customers/{customer}/edit', 'CustomerControllers@edit');

Route::patch('customers/{customer}', 'CustomerControllers@update');

Route::post('customers', 'CustomerControllers@store');