<?php
namespace App\Http\Requests;

use App\Http\APIRequest;

class UpdatecommentsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
           return [
    'post_id' => 'required',
    'user_id' => 'required',
    'comment' => 'required|max:250',
    'approved' => 'required'];
    }
}
