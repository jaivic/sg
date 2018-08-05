<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatecommentsRequest extends  FormRequest
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
    'post_id' => 'required',
    'user_id' => 'required',
    'comment' => 'required|max:250',
    'approved' => 'required'];
    }
}
