<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCarRequest extends FormRequest
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
            'brand' => 'string|required|min:2',
            'model' => 'string|required|min:2',
            'year' => 'required|integer',
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'boolean|required',
            'engine' => 'string|required',
            'numberOfDoors' => 'required|integer|min:2|max:5'
        ];
    }
}
