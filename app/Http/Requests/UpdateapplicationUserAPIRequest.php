<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdateapplicationUserAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'id' => 'required',
    'application_id' => 'required',
    'user_id' => 'required'];
    }
}
