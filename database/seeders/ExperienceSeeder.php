<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $experiences = [
        '0 an','1 an','2 ans','3 ans','4 ans','5 ans'
    ];
    for($i=0; $i<count($experiences); $i++){
        Experience::create([
            'experience' => $experiences[$i],
        ]);
    }
    }
}
