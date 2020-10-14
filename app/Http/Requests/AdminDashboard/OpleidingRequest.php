<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class OpleidingRequest  extends FormRequest
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
            'education_name'    =>  'required',
            'period'     =>  'required',
            'place'     =>  'required'
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

            'education_name.required'=>'De education name van de user is niet ingevuld',
            'period.required'=>'De period van de user is niet ingevuld',
            'place.required'=>'De place van de user is niet ingevuld'
            
        ];
    }
}

