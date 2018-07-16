<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateticketBackupDatabasesRequest extends  FormRequest
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
    'database_id' => 'required',
    'server_id' => 'required',
    'database_name' => 'required|max:250',
    'url' => 'max:250',
    'size' => 'max:10',
    'status' => 'required|max:1',
    'executed_at' => '',
    'created_at' => '',
    'updated_at' => ''];
    }
}
