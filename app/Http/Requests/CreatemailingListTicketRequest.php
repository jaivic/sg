<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatemailingListTicketRequest extends  FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
