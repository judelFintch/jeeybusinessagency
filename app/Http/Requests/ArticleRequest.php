<?php
declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'min:5', 'string', 'unique:articles'],
            'content' => ['required', 'min:20', 'string'],
            'picture' => ['required', 'mimes:jpeg,jpg,png', 'max:5000', 'image'],
            'resume' => ['required', 'min:10']
        ];
    }
}
