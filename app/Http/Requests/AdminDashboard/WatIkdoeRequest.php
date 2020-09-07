<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class WatIkdoeRequest  extends FormRequest
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
            'titel'    =>  'required',
            'description'     =>  'required'
        ];
    }
    public function messages()
    {
        return [

            'titel.required'=>'De titel name van de wat ik doe is niet ingevuld',
            'description.required'=>'De description van wat ik doe is niet ingevuld'
            
            
        ];
    }
}

