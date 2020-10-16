<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class LanguagesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //admin guard
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'abbr' => 'required|string|max:10',
          //  'active' => 'required|in:1',
            'direction' => 'required|in:rtl,ltr',
        ];
    }


    public function messages()
    {
        return [
            'required' => 'this field is required',
            'in' => 'The entered values are not correct ',
            'name.string' => 'The name of the language must be a letter',
            'abbr.max' => 'This field must be no more than 10 characters ',
            'abbr.string' => 'This field must be a letter',
            'name.max' => 'The name of the language must be no more than 100 characters ',
        ];
    }
}
