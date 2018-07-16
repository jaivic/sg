<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreateticketStatisticsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'ticket_id' => 'required',
    'name' => 'required|max:191',
    'value' => 'max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
