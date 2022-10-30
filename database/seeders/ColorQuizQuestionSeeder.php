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
            // red
            [
                "text" => "",
                "picture" => "red.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // green
            [
                "text" => "",
                "picture" => "green.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
             // orange
             [
                "text" => "",
                "picture" => "orange.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // yellow
            [
                "text" => "",
                "picture" => "yellow.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // blue
            [
                "text" => "",
                "picture" => "blue.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // purple
            [
                "text" => "",
                "picture" => "purple.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // pink
            [
                "text" => "",
                "picture" => "pink.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // black
            [
                "text" => "",
                "picture" => "black.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
            // brown
            [
                "text" => "",
                "picture" => "brown.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 3,
                "category_id" => 6
            ],
        ];
        
        foreach ($resources as $item) {
            QuizQuestion::create($item);
        }
    }
}
