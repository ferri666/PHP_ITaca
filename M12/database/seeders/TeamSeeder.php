<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Team::create([
            'name'=>'PIE-BOLA-GOL',
            'race'=>'Goblins',
            'manager'=>'Hub Gog',
        ]);

        \App\Models\Team::create([
            'name'=>'Inframuertos',
            'race'=>'Zombies',
            'manager'=>'Bill Difunto',
        ]);

        \App\Models\Team::create([
            'name'=>'Pijos del Bosque',
            'race'=>'Elfs',
            'manager'=>'Alrund Iradan',
        ]);

        \App\Models\Team::create([
            'name'=>'Pequeños pero matones',
            'race'=>'Dwarves',
            'manager'=>'Bromul Orakal',
        ]);
    }
}
