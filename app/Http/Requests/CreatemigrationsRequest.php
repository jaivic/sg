<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatemigrationsRequest extends  FormRequest
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
    'migration' => 'required|max:191',
    'batch' => 'required'];
    }
}
