<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Illuminate\Database\Seeder;

class ColorQuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            // [
            //     "text" => "",
            //     "picture" => "moon.png",
            //     "description" => "",
            //     "audio" => "",
            //     "video" => "",
            //     "quiz_type" => 1,
            //     "category_id" => 6
            // ],
        ];
        
        foreach ($resources as $item) {
            QuizQuestion::create($item);
        }
    }
}
