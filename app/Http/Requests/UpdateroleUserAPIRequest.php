<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdateroleUserAPIRequest extends APIRequest
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
