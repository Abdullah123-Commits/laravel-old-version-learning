<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|   // Passing dynamic stuff into URL
    Route::get('/users/{id}/{name}', function ($id, $name) {
    // return view('welcome');
    return 'This is user ' . $name . ' and with id:' . $id;
});

Route::get('/', function () {
    // return view('welcome');
    return '<h1>Hello World</h1>';
});
*/

Route::get('/about', function () {
    // return view('welcome');
    return view ('pages.about');
});

Route::get('/', 'PagesController@index');


