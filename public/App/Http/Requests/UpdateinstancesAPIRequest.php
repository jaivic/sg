<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class Update$MODEL_NAME$APIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'id' => 'required',
    'environment_id' => 'required',
    'type' => 'required|max:191',
    'name' => 'required|max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
