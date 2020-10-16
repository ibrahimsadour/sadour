<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class HobbysRequest  extends FormRequest
{
    /**
     *@todo  Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     *@todo Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'hobby' => 'required|array|min:1',
            'hobby.*.name' => 'required',
            'hobby.*.abbr' => 'required',
        ];
    }
        

}

