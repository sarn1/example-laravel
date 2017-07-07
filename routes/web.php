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

//protip: namespacing name like user.create

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('welcome', ['as' => 'welcome', function () {
    return view('welcome');
}]);
