<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatecategoriesAPIRequest extends APIRequest
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
