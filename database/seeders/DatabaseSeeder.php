<?php

namespace Database\Seeders;

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

         // Call Seeder Class
         $this->call(CategorySeeder::class);
         $this->call(AlphabetSeeder::class);
         $this->call(NumberSeeder::class);
         $this->call(NatureSeeder::class);
         $this->call(FruitSeeder::class);
         $this->call(VehicleSeeder::class);
         $this->call(AnimalSeeder::class);
         $this->call(HousewareSeeder::class);
    }
}
