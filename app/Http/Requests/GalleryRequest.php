<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'picture' => ['required', 'mimes:jpeg,jpg,png', 'max:5000', 'image'],
        ];
    }
}
