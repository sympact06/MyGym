<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\sessies */
class sessiesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sessienaam' => $this->sessienaam,
            'trainer' => $this->trainer,
            'gebruikers_deelnemend' => $this->gebruikers_deelnemend,
            'limiet_deelnemers' => $this->limiet_deelnemers,
            'starting' => $this->starting,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
