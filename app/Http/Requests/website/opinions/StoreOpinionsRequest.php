<?php
declare(strict_types=1);

namespace App\Http\Requests\website\opinions;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpinionsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable'],
            'surname' => ['nullable'],
            'email' => ['nullable'],
            'rate' => ['nullable'],
            'comment' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
