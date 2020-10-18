<?php

namespace App\Http\Requests\AdminDashboard;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest  extends FormRequest
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
     *@todo Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service' => 'required|array|min:1',
            'service.*.titel' => 'required',
            'service.*.abbr' => 'required',
        ];
    }
        
}

