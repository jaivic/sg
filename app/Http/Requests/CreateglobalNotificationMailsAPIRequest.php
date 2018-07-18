<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreateglobalNotificationMailsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'name' => 'required|max:191',
    'email' => 'required|max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}