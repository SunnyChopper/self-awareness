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

// Public site
Route::get('/', 'PublicController@index');
Route::get('/members/login', 'PublicController@login');
Route::get('/members/register', 'PublicController@register');

// Members site
Route::get('/dashboard/', 'MembersController@index');

// Auth
Auth::routes();
