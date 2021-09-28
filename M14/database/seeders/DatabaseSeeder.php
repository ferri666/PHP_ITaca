<?php

namespace Database\Seeders;

use App\Models\Shop;
use App\Models\Picture;
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

        Picture::create([
            'name' =>'Kromer',
            'value' => '1997',
            'date_arrival' => now(),
            'shop_id' => Shop::find(1)->id,
            'author' => 'Spamton'
        ]);

        Picture::create([
            'name' =>'Kromer',
            'value' => '1997',
            'date_arrival' => now(),
            'shop_id' => Shop::find(2)->id,
            'author' => 'Spamton'
        ]);

        Picture::create([
            'name' =>'Kromer',
            'value' => '1997',
            'date_arrival' => now(),
            'shop_id' => Shop::find(3)->id,
            'author' => 'Spamton'
        ]);

    }
}
