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
        $data1 = [
            'experience'=>'0 an',
            'experience'=>'1 ans',
            'experience'=>'2 ans',
            'experience'=>'3 ans',
            'experience'=>'4 ans',
            'experience'=>'5 ans',
        ];
        $data2=[
            'diplome'=>'Bac',
            'diplome'=>'Bac+2',
            'diplome'=>'Bac+3',
            'diplome'=>'Bac+4',
            'diplome'=>'Bac+5',
            'diplome'=>'Bac+6',
        ];
        return [
            'title'=>$this->faker->word(),
            'description'=>$this->faker->text($maxNbChars = 200),
            'experience'=>$data1[array_rand($data1)] ,
            'diplome'=>$data2[array_rand($data2)    ],
            'user_id'=>User::factory()->create()->id,
           'enterprise_id'=>$this->faker->numberBetween($min =1, $max = 30),
        ];
    }
}
