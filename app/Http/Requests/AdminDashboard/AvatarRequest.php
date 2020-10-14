<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class AvatarRequest  extends FormRequest
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
            'first_name'    =>  'required',
            'birthday'     =>  'required',
            'gender'    =>  'required',
            'email'     =>  'required',
            'phone'     =>  'required',
            'address'    =>  'required',
            'city'     =>  'required',
            'zip'     =>  'required'
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

            'first_name.required'=>'De first name  van de user is niet ingevuld',
            'birthday.required'=>'De birthday van de user is niet ingevuld',
            'gender.required'=>'De gender van de user is niet ingevuld',
            'email.required'=>'De email van de user is niet ingevuld',
            'phone.required'=>'De phone van de user is niet ingevuld',
            'address.required'=>'De address van de user is niet ingevuld',
            'city.required'=>'De city van de user is niet ingevuld',
            'zip.required'=>'De zip van de user is niet ingevuld'
            
        ];
    }
}

