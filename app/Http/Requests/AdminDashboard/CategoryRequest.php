<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest  extends FormRequest
{
    /**
     * @todo Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @todo Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'name_url' => 'required|max:100',
            'description' => 'required|max:100000',
            'weergeven' => 'required|max:1',
            'title' => 'required|max:100',
            'keywords' => 'required|max:100000',
            'description_back' => 'required|max:100000',

            
        ];
    }    
    
    /**
     * messages
     *@todo  the customize messages for the rules
     * @return void
     */
    public function messages()
    {
        return [

            'name.required' => 'Category name is required',
            'name.unique' => 'Category name bestaat all  ',
            'name_url.required' => 'Category name Url is required',
            'name_url.unique' => 'Category name Url bestaat all  ',
            'description.required' => 'Category description is required  ',
            'weergeven.required' => 'Category weergeven is required ',
            'title.required' => 'Category title is required ',
            'keywords.required' => 'Category keywords is required ',
            'description_back.required' => 'Category description back is required ',
            
            
        ];
    }
}

