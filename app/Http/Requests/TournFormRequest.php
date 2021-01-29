<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TournFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required'

        ];
    }
}
