<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateContactFrom extends FormRequest
{
    

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:10'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'file' =>['required']
        ];
    }
    public function messages(){
        return [
        'name.required' => 'Please fill the Name filed',
        'email.required' => 'Please fill the Email filed'
        ];
    }
}
