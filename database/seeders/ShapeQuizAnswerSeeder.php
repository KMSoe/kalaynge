<?php

namespace Database\Seeders;

use App\Models\QuizAnswer;
use Illuminate\Database\Seeder;

class ShapeQuizAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            // circle
            [
                'text' => '',
                'picture' => "circle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 6,
            ],
            [
                'text' => '',
                'picture' => "rectangle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 6,
            ],
            [
                'text' => '',
                'picture' => "star.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 6,
            ],
            // square
            [
                'text' => '',
                'picture' => "square.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 7,
            ],
            [
                'text' => '',
                'picture' => "triangle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 7,
            ],
            [
                'text' => '',
                'picture' => "circle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 7,
            ],
            // triangle
            [
                'text' => '',
                'picture' => "square.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 8,
            ],
            [
                'text' => '',
                'picture' => "triangle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 8,
            ],
            [
                'text' => '',
                'picture' => "oval.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 8,
            ],
            // oval
            [
                'text' => '',
                'picture' => "square.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 9,
            ],
            [
                'text' => '',
                'picture' => "circle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 9,
            ],
            [
                'text' => '',
                'picture' => "oval.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 9,
            ],
            // rectangle
            [
                'text' => '',
                'picture' => "star.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 10,
            ],
            [
                'text' => '',
                'picture' => "rectangle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 10,
            ],
            [
                'text' => '',
                'picture' => "circle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 10,
            ],
            // star
            [
                'text' => '',
                'picture' => "triangle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 11,
            ],
            [
                'text' => '',
                'picture' => "rectangle.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 11,
            ],
            [
                'text' => '',
                'picture' => "star.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 11,
            ],
        ];
        
        foreach ($resources as $item) {
            QuizAnswer::create($item);
        }
    }
}
