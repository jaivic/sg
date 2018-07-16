<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateticketRestoreDatabasesRequest extends  FormRequest
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
    'ticket_id' => 'required',
    'production_server_id' => 'required',
    'production_database' => 'required|max:191',
    'environment_id' => 'required',
    'server_id' => 'required',
    'database' => 'required|max:191',
    'created_at' => '',
    'updated_at' => '',
    'status' => 'max:1',
    'log' => ''];
    }
}
