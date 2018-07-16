<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatequalityTestsNodesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
   public function rules()
    {
        return [
    'id' => 'required',
    'ip' => 'required|max:256',
    'url' => 'required|max:256',
    'qualitytest_id' => 'required',
    'created_at' => '',
    'updated_at' => ''];
    }
}
