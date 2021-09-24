<?php

namespace Database\Seeders;

use App\Models\Shop;
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
        // \App\Models\User::factory(10)->create();

        Shop::create([
            'name' =>'TodoCollares',
            'location' => 'Murcia',
            'capacity' => '100'
        ]);

        Shop::create([
            'name' =>'ArteModerno',
            'location' => 'Madrid',
            'capacity' => '200'
        ]);

        Shop::create([
            'name' =>'Casa Paco',
            'location' => 'Huelga',
            'capacity' => '30'
        ]);

        Shop::create([
            'name' =>'JSFHkJFGKJ',
            'location' => 'PAHOF',
            'capacity' => '69'
        ]);
    }
}
