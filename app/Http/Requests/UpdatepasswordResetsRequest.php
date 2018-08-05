<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatepasswordResetsRequest extends FormRequest
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
