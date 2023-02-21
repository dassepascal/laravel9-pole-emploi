<?php

namespace Database\Seeders;

use App\Models\Poste;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PosteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//     $data1= [
//         'experience'=>'0 an',
//         'experience'=>'1 ans',
//         'experience'=>'2 ans',
//         'experience'=>'3 ans',
//         'experience'=>'4 ans',
//         'experience'=>'5 ans',
//     ];
//     $data2= [
//         'diplome'=>'Bac',
//         'diplome'=>'Bac+2',
//         'diplome'=>'Bac+3',
//         'diplome'=>'Bac+4',
//         'diplome'=>'Bac+5',
//         'diplome'=>'Bac+6',
//     ];

//     // Generate 10 postes
//     for ($i = 1; $i <= 10; $i++) {
//         DB::table('postes')->insert([
//             'title' => 'Poste '.$i,
//             'description' => 'Description '.$i,
//             'experience' => $data1[array_rand($data1)],
//             'diplome' => $data2[array_rand($data2)],
//             'enterprise_id' => rand(1, 10),
//         ]);
//     }
        // }
    }
}
