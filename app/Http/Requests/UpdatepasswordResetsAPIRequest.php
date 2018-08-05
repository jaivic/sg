<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatepasswordResetsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'email' => 'required|max:191',
    'token' => 'required|max:191'];
    }
}
