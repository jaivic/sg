<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatecommentsRequest extends FormRequest
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
