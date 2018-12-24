<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailFormValidationRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required|min:5|max:255',
            'message' => 'required|min:2'
        ];
    }


    public function messages()
    {
        return [
            'email.required' => 'Hey Whats Up, This is my Custom Message',
            'email.email' => 'Does Not Quite Look Like Email',
            'subject' => 'required|min:5|max:255',
            'message' => 'required|min:2'
        ];
    }
}
