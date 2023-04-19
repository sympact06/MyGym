<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class gebruikersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'gebruikersnaam' => ['required'],
            'wachtwoord' => ['required'],
            'abonnementsid' => ['nullable'],
        ];
    }
}
