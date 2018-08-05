<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatetagsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'name' => 'required|max:191'];
    }
}
