<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'min:5'],
            'files' => ['required', 'mimes:csv,txt,xlx,docx,xls,pdf', 'max:4000']
        ];
    }
}
