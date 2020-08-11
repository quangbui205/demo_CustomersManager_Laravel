<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCustomerRequest extends FormRequest
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
            'id'=>'required',
            'name'=>'required|min:5|max:255',
            'birthday'=>'required',
            'email' => 'required|email|unique:customer,email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nay khong duoc de trong!',
            'name.min' => 'Name size must be between 2 and 30!',
            'dob.required' => 'Ngay sinh sai',
            'email.required' => 'Email not null!',
        ];

    }
}
