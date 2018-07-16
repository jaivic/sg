<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatebackupApplicationsRequest extends  FormRequest
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
    'schedule_id' => '',
    'instance_name' => 'required|max:191',
    'start_time' => 'required',
    'completed_time' => '',
    'status' => 'required|max:1',
    'origin' => 'required|max:1',
    'error' => '',
    'backup_type' => 'required|max:1',
    'execution_time' => '',
    'observations' => '',
    'ticket_id' => '',
    'created_at' => '',
    'updated_at' => ''];
    }
}
