<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('pages.index');
});

Route::get('index', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

// Route::controller('/', 'IndexController');

// Route::controller('/contact', 'ContactController');

// Route::controller('/about', 'AboutController');

// Route::controller('/service', 'ServiceController');