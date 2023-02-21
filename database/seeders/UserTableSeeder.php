<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Poste;
use App\Models\Contact;
use App\Models\Enterprise;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(30)->create();

        User::factory(2)->create()->each(function($user) {
            $data=[
                'experience'=>'0 an',
                'experience'=>'1 ans',
                'experience'=>'2 ans',
                'experience'=>'3 ans',
                'experience'=>'4 ans',
                'experience'=>'5 ans',
            ];

            $user->enterprises()->saveMany(Enterprise::factory(10)->create([
                'user_id'=>$user->id,
            ]));
            $user->postes()->saveMany(Poste::factory(10))->create([
                'user_id' => $user->id,
                'experience' => $data[array_rand($data)],
                'enterprise_id' => rand(1, 10),
            ]);
            $user->contacts()->saveMany(Contact::factory(10)->create([
                'user_id'=>$user->id,
            ]));

        });

    }
}
