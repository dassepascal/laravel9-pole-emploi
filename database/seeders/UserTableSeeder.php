<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Poste;
use App\Models\Contact;
use App\Models\Enterprise;
use App\Models\Candidature;
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


            $user->enterprises()->saveMany(Enterprise::factory(10)->create([
                'user_id'=>$user->id,
                //'contact_id'=>rand(1, 30),
            ]));
            //$postes = Poste::all();
            $user->postes()->saveMany(Poste::factory(10))->create([
                // 'title'=>$postes->title,
                // 'description'=>$postes->description,
                'user_id' => $user->id,
                // 'experience_id' => rand(1, 6),
                'enterprise_id' => rand(1, 10),
            ]);
            $user->contacts()->saveMany(Contact::factory(10)->create([
                'user_id'=>$user->id,
            ]));
            $user->candidatures()->saveMany(Candidature::factory(10)->create([
                'user_id'=>$user->id,
                // 'contact_id'=>rand(1, 10),
                // 'poste_id'=>rand(1, 10),
                // 'enterprise_id'=>rand(1, 10),
            ]));

        });

    }
}
