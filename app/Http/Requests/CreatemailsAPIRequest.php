<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatemailsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'mailing_list_id' => 'required',
    'mail' => 'required|max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
