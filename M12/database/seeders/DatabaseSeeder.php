<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Team;

use App\Models\User;

use App\Models\Game;

use Illuminate\Support\Str;

use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       Role::create(['name' => 'admin']);
       Role::create(['name' => 'manager']);

        $admin=User::create([
            'name' => 'Admin',
            'email' => 'admin@email.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);


        $user1=User::create([
            'name' => 'Chug Zampabollos',
            'email' => 'chug@email.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        $user2=User::create([
            'name' => 'Dead Fred',
            'email' => 'dfred@email.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        $user3=User::create([
            'name' => 'Elenos Alumar',
            'email' => 'eleal@email.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);

        $user4=User::create([
            'name' => 'Odro Pomez',
            'email' => 'odro66@email.net',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ]);


        //Asignación de roles

        $admin->assignRole('admin');
        $user1->assignRole('manager');
        $user2->assignRole('manager');
        $user3->assignRole('manager');
        $user4->assignRole('manager');
        

         Team::create([
            'name'=>'PIE-BOLA-GOL',
            'race'=>'Goblins',
            'user_id'=> User::find(2)->id
        ]);

        Team::create([
            'name'=>'Inframuertos',
            'race'=>'Zombies',
            'user_id'=> User::find(3)->id
        ]);

        Team::create([
            'name'=>'Pijos del Bosque',
            'race'=>'Elfs',
            'user_id'=> User::find(4)->id
        ]);

        Team::create([
            'name'=>'Pequeños pero matones',
            'race'=>'Dwarves',
            'user_id'=> User::find(5)->id
        ]);

        Game::create([
            'date_game'=> today(),
            'description'=> 'Semifinal 1',
            'status'=>'Played',
            'team1_id'=> '1',
            'team2_id'=> '2',
            'team1_points'=> rand(0,200),
            'team2_points'=> rand(0,200)
        ]);

        Game::find(1)->scores();


        Game::create([
            'date_game'=> today(),
            'description'=> 'Semifinal2',
            'status'=>'Played',
            'team1_id'=> '3',
            'team2_id'=> '4',
            'team1_points'=> rand(0,200),
            'team2_points'=> rand(0,200)
        ]);

        Game::find(2)->scores();

        $winners= Team::where('wins', 1)->get();  
        $losers= Team::where('losses', 1)->get();         
        
           Game::create([
            'date_game'=> today(),
            'description'=> 'Final',
            'status'=>'Announced',
            'team1_id'=> $winners[0]->id,
            'team2_id'=> $winners[1]->id,
            'team1_points'=> '0',
            'team2_points'=> '0'
        ]);

        Game::create([
            'date_game'=> today(),
            'description'=> 'Amistoso',
            'status'=>'Announced',
            'team1_id'=> $losers[0]->id,
            'team2_id'=> $losers[1]->id,
            'team1_points'=> '0',
            'team2_points'=>'0'
        ]);
    }
}
