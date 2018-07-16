<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class Create$MODEL_NAME$APIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'name' => 'required|max:256',
    'email' => 'required|max:256',
    'created_at' => '',
    'updated_at' => ''];
    }
}
