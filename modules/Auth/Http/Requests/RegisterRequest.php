<?php

namespace Modules\Auth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
      'fullname' => 'required|max:50',
      'email'    => 'required|email',
      'password' => 'required|min:6',
      'birthday'     => 'required',
      'gender'      => 'required'
       ];
   }
   public function messages(){
        return [
            'fullname.required' => " Không được để trống tên.",
            'fullname.max' => " Phải hỏ hơn :max ký tự.",
            'password.required' => "Password Không được để trống",
            'password.min' => " Password lớn hơn :min ký tự",
            'email.required' => " Email Không được để trống",
            'email.email' => " Nhập sai email",
            'birthday.required' => 'Không được để trống',
            'gender.required' => 'Hãy chọn giới tính'
        ];
    }
}

