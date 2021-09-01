<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand' => 'string|sometimes|min:2',
            'model' => 'string|sometimes|min:2',
            'year' => 'sometimes|integer',
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'boolean|sometimes',
            'engine' => 'string|sometimes',
            'numberOfDoors' => 'sometimes|integer|min:2|max:5'
        ];
    }
}
