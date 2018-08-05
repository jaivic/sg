<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreateusersAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'name' => 'required|max:191',
    'email' => 'required|max:191',
    'password' => 'required|max:191',
    'remember_token' => 'max:100'];
    }
}
