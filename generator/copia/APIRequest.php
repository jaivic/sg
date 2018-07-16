<?php

namespace App\Http;

use Illuminate\Foundation\Http\FormRequest;
use generator\Utils\ResponseUtil;
use Response;

class APIRequest extends FormRequest
{
   
    public function response(array $errors)
    {
       
        $messages = implode(' ', array_flatten($errors));

        return Response::json(ResponseUtil::makeError($messages), 400);
    }
}
