<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateslackChannelsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
   public function rules()
    {
        return [
    'id' => 'required',
    'application_id' => 'required',
    'name' => 'required|max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
