<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WebpagesFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
	

        return [

        ];
    }
}
