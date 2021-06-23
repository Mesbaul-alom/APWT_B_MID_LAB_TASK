<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'email'=> 'required|max:50',
                'password'=> 'required|min:8|max:20'
        ];
    }

    public function messages(){
        return [
            'email.required' => 'cant left empty...',
            'email.max' => 'at max 50 char ...',
            'password.required'=> 'test message ...'
        ];
    }
}