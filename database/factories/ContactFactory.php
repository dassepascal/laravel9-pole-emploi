<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->lastname(),
            'firstName'=>$this->faker->firstName('male'|'female'),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'jobTitle'=>$this->faker->jobTitle(),
            'user_id'=>User::factory()->create()->id,
        ];
    }
}
