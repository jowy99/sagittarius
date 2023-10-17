<?php
declare(strict_types=1);

namespace App\Http\Requests\crm\projects;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['nullable'],
            'description' => ['nullable'],
            'file' => ['nullable'],
        ];
    }
    public function authorize(): bool
    {
        return true;
    }
}
