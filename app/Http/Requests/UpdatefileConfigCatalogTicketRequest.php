<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatefileConfigCatalogTicketRequest extends FormRequest
{

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
