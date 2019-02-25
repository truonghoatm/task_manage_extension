<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
            'inputTitle' => 'required|min:3',
            'inputContent' => 'required|min:3',
            'inputFile'=> 'required|mimes:jpeg,png',
            'inputDueDate'=> 'required|date'
        ];
    }
}
