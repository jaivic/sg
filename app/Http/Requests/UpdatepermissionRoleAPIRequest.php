<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatepermissionRoleAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'permission_id' => 'required',
    'role_id' => 'required'];
    }
}
