<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => []], function () {
    Route::get('captcha', 'CaptchaController@create');
    Route::post('captcha', 'CaptchaController@check');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
