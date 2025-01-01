<?php

use App\Http\Controllers\Api\V1\CaptchaController;
use Illuminate\Support\Facades\Route;

Route::get('captcha', [CaptchaController::class, 'create']);
Route::post('captcha', [CaptchaController::class, 'check']);
