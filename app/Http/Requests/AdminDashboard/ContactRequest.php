<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'    =>  'required',
            'email'     =>  'required',
            'message'     =>  'required'
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

            'name.required'=>'De naam van de user is niet ingevuld',
            'message.required'=>'De message van de user is niet ingevuld',
            'email.required'=>'De email van de user is niet ingevuld'
            
        ];
    }
}

