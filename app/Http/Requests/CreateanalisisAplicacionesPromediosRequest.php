<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateanalisisAplicacionesPromediosRequest extends  FormRequest
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
    'total_aplicaciones' => 'required',
    'sqale_index' => 'required',
    'page_load_time' => 'required',
    'page_bytes' => 'required',
    'sqale_debt_ratio' => 'required',
    'performance' => 'required',
    'performance_qualification' => 'max:1',
    'pagespeed_score' => 'required',
    'yslow_score' => 'required',
    'fecha' => '',
    'created_at' => '',
    'updated_at' => ''];
    }
}
