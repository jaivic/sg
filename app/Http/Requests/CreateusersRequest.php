<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateusersRequest extends  FormRequest
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
    'email' => 'required|max:191',
    'password' => 'required|max:191',
    'github_account' => 'max:191',
    'timezone' => 'required|max:191',
    'remember_token' => 'max:100',
    'created_at' => '',
    'updated_at' => '',
    'slack_user_id' => 'max:250'];
    }
}
