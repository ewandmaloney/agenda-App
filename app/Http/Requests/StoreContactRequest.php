<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
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
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('contacts')
                ->where('user_id', auth()->id())
                ->ignore(request()->route('contact')),
            ],
            'phone_number' => 'required|digits:9',
            'profile_picture' => 'image|nullable',
            'company_id' => 'required|gt:0',
        ];
    }

    public function messages(){
        return [
            'email.unique' => 'You already have an account with this email.',
        ];
    }
}
