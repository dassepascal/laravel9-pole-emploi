<?php

namespace Database\Seeders;

use App\Models\Diplome;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiplomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diplomes = [
            'Bac','Bac+2','Bac+3','Bac+4','Bac+5'
        ];
        for($i=0; $i<count($diplomes); $i++){
            Diplome::create([
                'diplome' => $diplomes[$i],
            ]);
        }
    }
}
