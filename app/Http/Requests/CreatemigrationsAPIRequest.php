<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatemigrationsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'migration' => 'required|max:191',
    'batch' => 'required'];
    }
}
