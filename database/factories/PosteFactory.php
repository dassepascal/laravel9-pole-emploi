<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Enterprise;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poste>
 */
class PosteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        // to do resoudre pb de user_id

        return [
            'title'=>$this->faker->word(),
            'description'=>$this->faker->text($maxNbChars = 200),
            'experience_id'=>Experience::inRanDomOrder()->first()->id,
            'diplome'=>$this->faker->randomElement(['Bac', 'Bac+2', 'Bac+3', 'Bac+4', 'Bac+5', 'Bac+6']),
            'user_id'=>User::factory()->create()->id,
           'enterprise_id'=>Enterprise::inRanDomOrder()->first()->id,
         ];
    }
}
