<?php

namespace App\Http\Requests;

use App\Http\APIRequest;


class CreatepostsAPIRequest extends APIRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
    'user_id' => 'required',
    'title' => 'required|max:191',
    'slug' => 'required|max:191',
    'body' => 'required',
    'type' => 'required',
    'image' => 'max:191',
    'postback' => 'required|max:191',
    'visits' => 'required',
    'likes' => 'required',
    'status' => 'required'];
    }
}
