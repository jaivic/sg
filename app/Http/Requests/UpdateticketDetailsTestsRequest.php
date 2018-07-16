<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateticketDetailsTestsRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    
   public function rules()
    {
        return [
    'id' => 'required',
    'ticket_id' => 'required',
    'quality_tests_id' => 'required',
    'status' => 'max:191',
    'details' => 'max:191',
    'created_at' => '',
    'updated_at' => ''];
    }
}
