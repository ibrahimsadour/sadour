<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class AdminStoreRequest extends FormRequest
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
            'name'    =>  'required',
            'description'     =>  'required',
            'keywords'     =>  'required',
            'date'     =>  'required',
            'Address'     =>  'required',
            'Email'     =>  'required',
            'Phone'     =>  'required',
            'function'     =>  'required'
        ];
    }
    public function messages()
    {
        return [

            'name.required'=>'de naam van de user is niet ingevuld',
            'description.required'=>'de keywords van de user is niet ingevuld',
            'keywords.required'=>'de keywords van de user is niet ingevuld',
            'date.required'=>'de date van de user is niet ingevuld',
            'Address.required'=>'de Address van de user is niet ingevuld',
            'Email.required'=>'de Email van de user is niet ingevuld',
            'Phone.required'=>'de Phone van de user is niet ingevuld',
            'function.required'=>'de function van de user is niet ingevuld',
            
        ];
    }
}

