<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatecategoriesAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'name' => 'required|max:191'];
    }
}
