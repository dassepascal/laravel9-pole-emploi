<?php

namespace Database\Factories;

use App\Models\User;
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
            'experience'=>$this->faker->numberBetween($min = 0, $max = 5),
            'diplome'=>$this->faker->sentence($nb=2),
            'user_id'=>User::factory()->create()->id,
<<<<<<< HEAD
           //'enterprise_id'=>$this->faker->numberBetween($min =1, $max = 30),
=======
            'enterprise_id'=>$this->faker->numberBetween($min =1, $max = 30),
>>>>>>> code2
        ];
    }
}
