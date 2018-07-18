<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateticketsRequest extends  FormRequest
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
    'user_id' => '',
    'aproved_by' => '',
    'application_id' => '',
    'environment_id' => '',
    'old_id' => '',
    'type' => 'required|max:191',
    'status' => 'required|max:1',
    'scheduled_at' => 'required',
    'executed_at' => '',
    'description' => '',
    'observation' => '',
    'created_at' => '',
    'updated_at' => '',
    'emergency_level' => 'required'];
    }
}