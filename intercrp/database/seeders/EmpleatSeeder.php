<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmpleatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Empleat::create([
            'nom'=>'Javier Rubio',
            'email'=> 'javrub@email.net',
            'feina'=> 'Marketing',
        ]);

        \App\Models\Empleat::create([
            'nom'=>'Paula Morena',
            'email'=> 'paulamor@email.net',
            'feina'=> 'RRHH',
        ]);

        \App\Models\Empleat::create([
            'nom'=>'Marta Morena',
            'email'=> 'martamor@email.net',
            'feina'=> 'RRHH',
        ]);

        \App\Models\Empleat::create([
            'nom'=>'Tomas Judias',
            'email'=> 'tomjud@email.net',
            'feina'=> 'Contabilidad',
        ]);

        \App\Models\Empleat::create([
            'nom'=>'Iñigo Montoya',
            'email'=> 'iñimon@email.net',
            'feina'=> 'Trabajador',
        ]);

    }
}
