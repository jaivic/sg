<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatedeploymentInstanceSummariesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
   public function rules()
    {
        return [
    'id' => 'required',
    'deployment_information_id' => 'required',
    'instance_id' => 'required|max:191',
    'status' => 'required',
    'created_at' => '',
    'updated_at' => ''];
    }
}
