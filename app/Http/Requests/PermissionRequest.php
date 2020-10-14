<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
            'name'=>'required|max:40'
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

            'name.required'=>'de naam van de Permission is niet ingevuld',
            
        ];
    }
}

