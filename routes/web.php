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

Route::view('/', 'welcome');

Auth::routes();

Route::resource('/todos', 'TodosController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@show')->name('profile.show');

Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');

Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::view('/contact-me', 'contact-me');
