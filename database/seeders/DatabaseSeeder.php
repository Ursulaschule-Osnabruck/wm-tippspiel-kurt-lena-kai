<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

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

        DB::table('teams')->insert(['name' => 'Deutschland', 'gruppe' => 'A' ]);
        DB::table('teams')->insert(['name' => 'Italien', 'gruppe' => 'A' ]);
        DB::table('teams')->insert(['name' => 'Katar', 'gruppe' => 'A' ]);
        DB::table('teams')->insert(['name' => 'Dänemark', 'gruppe' => 'A' ]);
        DB::table('teams')->insert(['name' => 'Brasilien', 'gruppe' => 'B' ]); 
        DB::table('teams')->insert(['name' => 'Frankreich', 'gruppe' => 'B' ]); 
        DB::table('teams')->insert(['name' => 'Belgien', 'gruppe' => 'B' ]); 
        DB::table('teams')->insert(['name' => 'Kroatien', 'gruppe' => 'B' ]); 
        DB::table('teams')->insert(['name' => 'Serbien', 'gruppe' => 'C' ]); 
        DB::table('teams')->insert(['name' => 'Spanien', 'gruppe' => 'C' ]); 
        DB::table('teams')->insert(['name' => 'England', 'gruppe' => 'C' ]); 
        DB::table('teams')->insert(['name' => 'Schweiz', 'gruppe' => 'C' ]); 
        DB::table('teams')->insert(['name' => 'Niederlande', 'gruppe' => 'D' ]); 
        DB::table('teams')->insert(['name' => 'Argentinien', 'gruppe' => 'D' ]); 
        DB::table('teams')->insert(['name' => 'Iran', 'gruppe' => 'D' ]); 
        DB::table('teams')->insert(['name' => 'Südkorea', 'gruppe' => 'D' ]); 
        DB::table('teams')->insert(['name' => 'Saudi-Arabien', 'gruppe' => 'E' ]);
        DB::table('teams')->insert(['name' => 'Japan', 'gruppe' => 'E' ]); 
        DB::table('teams')->insert(['name' => 'Ecuador', 'gruppe' => 'E' ]); 
        DB::table('teams')->insert(['name' => 'Uruguay', 'gruppe' => 'E' ]); 
        DB::table('teams')->insert(['name' => 'Kanada', 'gruppe' => 'F' ]); 
        DB::table('teams')->insert(['name' => 'Ghana', 'gruppe' => 'F' ]); 
        DB::table('teams')->insert(['name' => 'Senegal', 'gruppe' => 'F' ]); 
        DB::table('teams')->insert(['name' => 'Portugal', 'gruppe' => 'F' ]); 
        DB::table('teams')->insert(['name' => 'Polen', 'gruppe' => 'G' ]); 
        DB::table('teams')->insert(['name' => 'Marokko', 'gruppe' => 'G' ]); 
        DB::table('teams')->insert(['name' => 'Tunesien', 'gruppe' => 'G' ]); 
        DB::table('teams')->insert(['name' => 'Kamerun', 'gruppe' => 'G' ]); 
        DB::table('teams')->insert(['name' => 'Mexiko', 'gruppe' => 'H' ]); 
        DB::table('teams')->insert(['name' => 'USA', 'gruppe' => 'H' ]); 
        DB::table('teams')->insert(['name' => 'Wales', 'gruppe' => 'H' ]); 
        DB::table('teams')->insert(['name' => 'Australien', 'gruppe' => 'H' ]); 
        DB::table('teams')->insert(['name' => 'Costa Rica', 'gruppe' => 'H' ]); 
    }
}
