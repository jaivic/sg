<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdaterolesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
   public function rules()
    {
        return [
    'id' => 'required',
    'name' => 'required|max:191',
    'display_name' => 'max:191',
    'description' => 'max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
