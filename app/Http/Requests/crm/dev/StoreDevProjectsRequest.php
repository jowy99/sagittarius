<?php
declare(strict_types=1);

namespace App\Http\Requests\crm\dev;

use Illuminate\Foundation\Http\FormRequest;

class StoreDevProjectsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:254'],
            'description' => ['required', 'max:254'],
            'github' => ['required'],
            'image' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
