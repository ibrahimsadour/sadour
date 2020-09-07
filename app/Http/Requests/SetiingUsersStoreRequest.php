<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SetiingUsersStoreRequest extends FormRequest
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
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ];
    }
    public function messages()
    {
        return [

            'name.required'=>'de naam van de User is niet ingevuld',
            'email.required'=>'de email van de User is niet ingevuld',
            'password.required'=>'de wachtwoord is verplicht om een nieuw user te maken',
            
        ];
    }
}
