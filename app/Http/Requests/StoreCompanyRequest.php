<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCompanyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|digits:9',
            'email' => [
                'required',
                'email',
                Rule::unique('company')
                ->ignore(request()->route('company')),
            ],
        ];
    }

    public function messages(){
        return [
            'email.unique' => 'You already have an account with this email.',
        ];
    }
}
