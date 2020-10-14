<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class SociaalRequest  extends FormRequest
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
            'facebook'    =>  'required',
            'twitter'     =>  'required',
            'instagram'     =>  'required',
            'linkedin'     =>  'required',
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

            'facebook.required'=>'De facebook link van de user is niet ingevuld',
            'twitter.required'=>'De twitter link van user is niet ingevuld',
            'instagram.required'=>'De instagram link van user is niet ingevuld',
            'linkedin.required'=>'De linkedin link van user is niet ingevuld'
            
            
        ];
    }
}

