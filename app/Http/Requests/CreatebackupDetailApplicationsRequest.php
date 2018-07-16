<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatebackupDetailApplicationsRequest extends  FormRequest
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
    'backup_application_id' => 'required',
    'folder_name' => 'required|max:191',
    'status' => 'required|max:1',
    'mode' => 'required|max:1',
    'size_in_gb' => '',
    'files' => 'required',
    's3_path' => 'max:191',
    'start_time' => 'required',
    'completed_time' => '',
    'duration' => '',
    'zip_start_time' => '',
    'zip_completed_time' => '',
    's3_start_time' => '',
    's3_completed_time' => '',
    'log_error' => '',
    'observations' => '',
    'created_at' => '',
    'updated_at' => ''];
    }
}
