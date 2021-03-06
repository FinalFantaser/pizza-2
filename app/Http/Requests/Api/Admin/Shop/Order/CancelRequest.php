<?php

namespace App\Http\Requests\Api\Admin\Shop\Order;

use Illuminate\Foundation\Http\FormRequest;

class CancelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'reason' => 'required|string|max:500'
        ];
    }
}