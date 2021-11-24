<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:4'],
            'email' => ['required', 'email'],
            'picture' => ['required',  'mimes:jpeg,jpg,png', 'max:5000', 'image'],
            'phone_number' => ['required', 'min:4'],
            'password' => ['required', 'min:6']
        ];
    }
}
