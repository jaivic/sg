<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatemailsRequest extends  FormRequest
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
    'mail' => 'required|max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
