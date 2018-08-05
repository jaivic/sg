<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatepostCategoryAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'post_id' => 'required',
    'category_id' => 'required'];
    }
}
