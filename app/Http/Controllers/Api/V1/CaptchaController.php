<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;

class CaptchaController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$result['captcha'] = app('captcha')->create('flat', true);
        return $this->sendResponse($result, 'Captcha created successfully.');
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
		if (!captcha_api_check($request->captcha, $request->key, 'flat')){
            return $this->sendError('Invalid captcha code.', [], 400);
        }
        return $this->sendResponse(null, 'Valid captcha code.');
    }
}
