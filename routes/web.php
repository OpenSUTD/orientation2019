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

Route::get('/404', function () {
    return view('fake404');
});

Route::get('/404.php', function () {
    return view('fake404');
});

Route::get('/404.html', function () {
    return view('fake404');
});

Route::get('/NotFound', function () {
    return view('fake404');
});

Route::get('/Notfound', function () {
    return view('fake404');
});

Route::get('/notFound', function () {
    return view('fake404');
});

Route::get('/notfound', function () {
    return view('fake404');
});

Route::get('test', function () {
    $response = Telegram::getMe();

    return json_encode($response);
});
