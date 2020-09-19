<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class CalendarRequest  extends FormRequest
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
            'title'    =>  'required',
            'start'     =>  'required',
            'end'     =>  'required',
            'allDay'     =>  'required',
            'textColor' =>   'required'
        ];
    }
    public function messages()
    {
        return [

            'title.required'=>'De title van de event is niet ingevuld',
            'start.required'=>'De start time van de event is niet ingevuld',
            'end.required'=>'De end timeis  van de event niet ingevuld',
            'allDay.required'=>'De allDay van de event is niet ingevuld',
            'textColor.required'=>'De textColor van de event is niet ingevuld'
            
        ];
    }
}

