<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateapplicationsRequest extends  FormRequest
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
    'aws_account_id' => 'required',
    'repository' => 'required|max:191',
    'deployment_type' => 'required|max:191',
    'url' => 'max:191',
    'sonar_key' => 'max:191',
    'json_rules' => '',
    'created_at' => '',
    'updated_at' => ''];
    }
}
