<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatesqlDatabasesRequest extends  FormRequest
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
    'server_id' => 'required',
    'status' => 'required',
    'name' => 'required|max:256',
    'created_at' => '',
    'updated_at' => ''];
    }
}
