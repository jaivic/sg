<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatepasswordResetsRequest extends  FormRequest
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
    'email' => 'required|max:191',
    'token' => 'required|max:191'];
    }
}
