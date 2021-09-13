<?php

namespace Database\Seeders;

use App\Models\Reserva;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();


         Reserva::create([
            'fecha_entrada'=>today(),
            'fecha_salida'=>date('Y-m-d', strtotime(today()."+1 week")),
            'adultos'=> '2',
            'menores'=> '1',
            'animales'=>true,
            'user_id'=> User::find(1)->id
         ]);

         Reserva::create([
            'fecha_entrada'=>today(),
            'fecha_salida'=>date('Y-m-d', strtotime(today()."+1 week")),
            'adultos'=> '4',
            'menores'=> '0',
            'animales'=>false,
            'user_id'=> User::find(2)->id
         ]);

         Reserva::create([
            'fecha_entrada'=>today(),
            'fecha_salida'=>date('Y-m-d', strtotime(today()."+1 week")),
            'adultos'=> '1',
            'menores'=> '0',
            'animales'=>false,
            'user_id'=> User::find(3)->id
         ]);
         Reserva::create([
            'fecha_entrada'=>today(),
            'fecha_salida'=>date('Y-m-d', strtotime(today()."+1 week")),
            'adultos'=> '1',
            'menores'=> '1',
            'animales'=>true,
            'user_id'=> User::find(4)->id
         ]);
        

    }
}
