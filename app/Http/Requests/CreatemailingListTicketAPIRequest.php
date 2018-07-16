<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatemailingListTicketAPIRequest extends APIRequest
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
    'ticket_id' => 'required',
    'created_at' => '',
    'updated_at' => ''];
    }
}
