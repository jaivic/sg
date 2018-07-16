<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatefileConfigCatalogTicketRequest extends  FormRequest
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
    'file_config_catalog_id' => 'required',
    'ticket_id' => 'required'];
    }
}
