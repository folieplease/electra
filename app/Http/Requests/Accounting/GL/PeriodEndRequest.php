<?php

namespace App\Http\Requests\Accounting\GL;

use Illuminate\Foundation\Http\FormRequest;

class PeriodEndRequest extends FormRequest
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
            'postdate_start' => 'required',
            'postdate_end' => 'required',
        ];
    }
}
