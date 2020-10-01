<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest  extends FormRequest
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
            'name' => 'required|max:100',
            'weergeven' => 'required|max:1',
        ];
    }
    public function messages()
    {
        return [

            'name.required' => 'Category name is required',
            'name.unique' => 'Category name bestaat all  ',
            'weergeven.required' => 'Category weergeven is required ',
            
            
        ];
    }
}

