<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleStoreRequest extends FormRequest
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

            'name'=>'required|unique:roles|max:10',
            'permissions' =>'required',
    

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


            'name.required'=>'de naam in niet ingevuld',
            'permissions.required'=>'de permissions in niet ingevuld'
            
        ];
    }
}
