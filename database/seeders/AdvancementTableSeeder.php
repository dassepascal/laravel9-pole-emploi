<?php

namespace Database\Seeders;

use App\Models\Advancement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdvancementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advancements = [
            [
                'label_advancement' => 'En attente',
            ],
            [
                'label_advancement' => 'En cours',
            ],
            [
                'label_advancement' => 'Refusé',
            ],
            [
                'label_advancement' => 'Accepté',
            ],
        ];
        for($i=0; $i<count($advancements); $i++){
            Advancement::create([
                'label_advancement' => $advancements[$i]['label_advancement'],
            ]);
        }
    }
}
