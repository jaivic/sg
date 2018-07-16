<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreateroleUserAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'user_id' => 'required',
    'role_id' => 'required'];
    }
}
