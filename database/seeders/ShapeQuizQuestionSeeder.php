<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Illuminate\Database\Seeder;

class ShapeQuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            [
                "text" => "",
                "picture" => "circle.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 2,
                "category_id" => 6
            ],
            [
                "text" => "",
                "picture" => "square.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 2,
                "category_id" => 6
            ],
            [
                "text" => "",
                "picture" => "triangle.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 2,
                "category_id" => 6
            ],
            [
                "text" => "",
                "picture" => "oval.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 2,
                "category_id" => 6
            ],
            [
                "text" => "",
                "picture" => "rectangle.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 2,
                "category_id" => 6
            ],
            [
                "text" => "",
                "picture" => "star.png",
                "description" => "",
                "audio" => "",
                "video" => "",
                "quiz_type" => 2,
                "category_id" => 6
            ],
        ];
        
        foreach ($resources as $item) {
            QuizQuestion::create($item);
        }
    }
}
