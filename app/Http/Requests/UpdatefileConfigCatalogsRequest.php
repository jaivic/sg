<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatefileConfigCatalogsRequest extends FormRequest
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
    'environment_id' => 'required',
    'storage' => 'required|max:5',
    'filename' => 'required|max:250',
    'created_at' => '',
    'updated_at' => '',
    'deleted_at' => ''];
    }
}