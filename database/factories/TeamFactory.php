<?php

namespace Database\Factories;

use App\Models\League;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'league_id' => rand(1,1),
            'name' => fake()->firstName,
            'points' => rand(0,5),
            'played' => rand(0,5),
            'won' => rand(0,5),
            'drawn' => rand(0,5),
            'lost' => rand(0,5),
            'goal' => rand(0,10)
        ];
    }
}
