<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequest  extends FormRequest
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
            'description' => 'required|max:500',
            'photo' => 'required|mimes:png,jpg,jpeg',
        ];
    }
    public function messages()
    {
        return [

            'name.required' => 'projects name   required',
            'name.unique' => 'project name bestaat all  ',
            'description.required' => 'project description bestaat all ',
            'photo.required' =>  'projects photo required',
            'photo.mimes' =>  'projects photo is niet geldig',
            
            
        ];
    }
}

