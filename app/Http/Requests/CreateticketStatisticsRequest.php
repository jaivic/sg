<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateticketStatisticsRequest extends  FormRequest
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
    'ticket_id' => 'required',
    'name' => 'required|max:191',
    'value' => 'max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
