<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sessiesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'sessienaam' => ['required'],
            'trainer' => ['nullable'],
            'gebruikers_deelnemend' => ['required'],
            'limiet_deelnemers' => ['required', 'integer'],
            'starting' => ['required', 'date'],
        ];
    }
}
