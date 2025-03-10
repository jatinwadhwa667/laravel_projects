<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customervalidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'image' => ['nullable' , 'image'],
                'first_name'=> ['required' , 'string'],
                'last_name'=> ['required' , 'string'],
                'email' =>['required' , 'email'],
                'phone' =>['required' , 'string'],
                'account_number' =>['required' , 'numeric']
        ];
    }
}
