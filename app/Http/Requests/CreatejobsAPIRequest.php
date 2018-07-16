<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatejobsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'queue' => 'required|max:191',
    'payload' => 'required',
    'attempts' => 'required',
    'reserved_at' => '',
    'available_at' => 'required',
    'created_at' => 'required'];
    }
}
