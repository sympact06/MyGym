<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\gebruikers */
class gebruikersResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'gebruikersnaam' => $this->gebruikersnaam,
            'wachtwoord' => $this->wachtwoord,
            'abonnementsid' => $this->abonnementsid,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
