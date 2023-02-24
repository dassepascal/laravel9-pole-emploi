<?php

namespace Database\Factories;

use App\Models\Source;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidature>
 */
class CandidatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence($nb = 2, $asText = true),
            'lien'=>$this->faker->url(),
            'enterprise'=>$this->faker->company(),
            'user_id'=>$this->faker->numberBetween($min =1, $max = 30),
            'source_id'=>Source::inRandomOrder()->first()->id,
        ];
    }
}
