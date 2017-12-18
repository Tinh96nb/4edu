<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'fullname' => 'required',
            'email'    => 'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required' => "không được để trống",
            'fullname.required' => "Không được để trống",
            'email.required' => "Không được để trống"
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
