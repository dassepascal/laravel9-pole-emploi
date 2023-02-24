<?php

namespace Database\Seeders;

use App\Models\Source;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sources = [
            'Linkedin','Indeed','Monster','Pole Emploi','Autre'
        ];
        for($i=0; $i<count($sources); $i++){
            Source::create([
                'label_source' => $sources[$i],
            ]);
        }
    }
}
