<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateticketDetailsTestsRequest extends  FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
