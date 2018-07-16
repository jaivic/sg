<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateapplicationUserRequest extends  FormRequest
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
    'application_id' => 'required',
    'user_id' => 'required'];
    }
}
