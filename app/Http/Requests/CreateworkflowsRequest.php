<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateworkflowsRequest extends  FormRequest
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
    'user_id' => 'required',
    'approved' => '',
    'approved_at' => '',
    'condition' => 'required',
    'group' => 'required',
    'created_at' => '',
    'updated_at' => ''];
    }
}
