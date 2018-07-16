<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatesqlDatabasesAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'id' => 'required',
    'server_id' => 'required',
    'status' => 'required',
    'name' => 'required|max:256',
    'created_at' => '',
    'updated_at' => ''];
    }
}
