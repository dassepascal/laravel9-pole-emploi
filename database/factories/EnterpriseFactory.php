<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enterprise>
 */
class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'activity'=>$this->faker->catchPhrase(),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'site'=>$this->faker->url(),
            'user_id'=>User::factory()->create()->id,
        ];
    }
}
