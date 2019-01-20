<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('telegram/'.env('TELEGRAM_ENDPOINT_SECRET'), function (Request $request) {
    $update = Telegram::commandsHandler(true);

    return 'ok';
});
