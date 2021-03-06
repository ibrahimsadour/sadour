<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequest  extends FormRequest
{
    /**
     *@todo  Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *@todo  Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'description' => 'required|max:100000',
            'photo' => 'required|mimes:png,jpg,jpeg',
        ];
    }    
    /**
     * messages
     * @todo  the customize messages for the rules
     * @return void
     */
    public function messages()
    {
        return [

            'name.required' => 'projects name   required',
            'name.unique' => 'project name bestaat all  ',
            'description.required' => 'project description required ',
            'photo.required' =>  'projects photo required',
            'photo.mimes' =>  'projects photo is niet geldig',
            
            
        ];
    }
}

