<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=> 'required',
            'password' => 'required'
        ];
    }
    public function messages(){
        return [
            'username.required' => "không được để trống",
            'username.unique' => "tài khoản là duy nhất",
            'password.required' => "không được để trống",
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
