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
            $enterprises = Enterprise::all();
            $user->postes()->saveMany(Poste::factory(10))->create([
                'user_id' => $user->id,
               'enterprise_id' => $enterprises->random()->id,
            ]);
            $user->enterprises()->saveMany(Enterprise::factory(10)->create([
                'user_id'=>$user->id,
            ]));
            $user->contacts()->saveMany(Contact::factory(10)->create([
                'user_id'=>$user->id,
            ]));

        });

    }
}
