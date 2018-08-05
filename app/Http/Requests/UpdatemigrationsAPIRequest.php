<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatemigrationsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'migration' => 'required|max:191',
    'batch' => 'required'];
    }
}
