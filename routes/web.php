<?php

use App\Services\Telegram\Exceptions\TelegramBotApiException;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    logger()
        ->channel('telegram')
        ->info('123');

    return view('welcome');
});
