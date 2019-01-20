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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $response = Telegram::getMe();

    return json_encode($response);
});

Route::post('telegram/'.env('TELEGRAM_ENDPOINT_SECRET'), function (Request $request) {
    $update = Telegram::commandsHandler(true);

    return 'ok';
});
