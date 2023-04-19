<?php

namespace Database\Factories;

use App\Models\sessies;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class sessiesFactory extends Factory
{
    protected $model = sessies::class;

    public function definition(): array
    {
        return [
            'sessienaam' => $this->faker->word(),
            'gebruikers_deelnemend' => $this->faker->word(),
            'limiet_deelnemers' => $this->faker->randomNumber(),
            'starting' => Carbon::now(),
        ];
    }
}
