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
    if ($update->get('callback_query') == null) {
    }
    Log::debug(var_export($update, true));

    return 'ok';
});

Route::post('try_puzzle/{id}', function (Request $request, $id) {
    $puzzle = App\Puzzle::find($id);
    if ($request->input('password') == $puzzle->password) {
        return $puzzle->lore;
    } else {
        return str_random(255);
    }
});
