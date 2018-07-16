<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateawsAccountsRequest extends  FormRequest
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
    'name' => 'required|max:191',
    'access_key' => 'required|max:191',
    'secret_key' => 'required|max:191',
    'region' => 'required|max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
