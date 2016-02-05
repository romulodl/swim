<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SessionRequest extends Request
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'       => 'required',
            'description' => 'required',
            'date'        => 'required|date',
            'start_time'  => 'required|date_format:H:i',
            'finish_time' => 'required|date_format:H:i',
        ];
    }
}
