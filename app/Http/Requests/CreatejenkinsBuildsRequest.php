<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatejenkinsBuildsRequest extends  FormRequest
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
    'environment_id' => 'required',
    'number' => 'required',
    'bucket' => 'max:191',
    'key' => 'max:191',
    'bundle_type' => 'max:191',
    'commit_id' => 'max:191',
    'status' => 'max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
