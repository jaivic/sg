<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateanalisisAplicacionesPromediosMensualesRequest extends  FormRequest
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
    'month' => 'required',
    'year' => 'required',
    'sqale_index' => 'required',
    'sqale_debt_ratio' => 'required',
    'performance' => 'required',
    'page_load_time' => 'required',
    'created_at' => '',
    'updated_at' => ''];
    }
}