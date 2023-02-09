<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Poste;
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
            $user->postes()->saveMany(Poste::factory(10))->create([
                'user_id' => $user->id,
                

            ]);
            // $enterprise->postes()->saveMany(Poste::factory(10)->create([
            //     'enterprise_id'=>$poste->id,
            // ]));
        });
    }
}
