<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreateretentionsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'day' => 'required',
    'route' => 'required|max:256',
    'created_at' => '',
    'updated_at' => ''];
    }
}
