<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
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
         $this->call(ColorSeeder::class);
         $this->call(ShapeSeeder::class);
         $this->call(QuizTypeSeeder::class);
         $this->call(AlphabetQuizQuestionSeeder::class);
         $this->call(AlphabetQuizAnswerSeeder::class);
         $this->call(AlpabetQuizMappingSeeder::class);

         // Shapes Quiz Seeders
         $this->call(ShapeQuizQuestionSeeder::class);
         $this->call(ShapeQuizAnswerSeeder::class);
         $this->call(ShapeQuizMappingSeeder::class);

          // Color Quiz Seeders
         $this->call(ColorQuizQuestionSeeder::class);
         $this->call(ColorQuizAnswerSeeder::class);
         $this->call(ColorQuizMappingSeeder::class);

    }
}
