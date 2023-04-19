<?php

namespace Database\Factories;

use App\Models\gebruikers;
use Illuminate\Database\Eloquent\Factories\Factory;

class gebruikersFactory extends Factory
{
    protected $model = gebruikers::class;

    public function definition(): array
    {
        return [
            'gebruikersnaam' => $this->faker->word(),
            'wachtwoord' => $this->faker->word(),
        ];
    }
}
