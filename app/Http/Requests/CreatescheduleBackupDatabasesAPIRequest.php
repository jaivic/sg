<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatescheduleBackupDatabasesAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'id' => 'required',
    'schedule_backup_id' => 'required',
    'name' => 'required|max:191',
    'created_at' => '',
    'updated_at' => '',
    'orden' => 'required'];
    }
}
