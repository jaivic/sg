<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatejobsRequest extends  FormRequest
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
    'queue' => 'required|max:191',
    'payload' => 'required',
    'attempts' => 'required',
    'reserved_at' => '',
    'available_at' => 'required',
    'created_at' => 'required'];
    }
}
