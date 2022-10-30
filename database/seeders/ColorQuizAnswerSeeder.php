<?php

namespace Database\Seeders;

use App\Models\QuizAnswer;
use Illuminate\Database\Seeder;

class ColorQuizAnswerSeeder extends Seeder
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
                'text' => '',
                'picture' => "red.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 12,
            ],
            [
                'text' => '',
                'picture' => "green.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 12,
            ],
            [
                'text' => '',
                'picture' => "brown.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 12,
            ],
            // green
            [
                'text' => '',
                'picture' => "red.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 13,
            ],
            [
                'text' => '',
                'picture' => "green.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 13,
            ],
            [
                'text' => '',
                'picture' => "blue.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 13,
            ],
            // orange
            [
                'text' => '',
                'picture' => "black.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 14,
            ],
            [
                'text' => '',
                'picture' => "blue.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 14,
            ],
            [
                'text' => '',
                'picture' => "orange.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 14,
            ],
            // yellow
            [
                'text' => '',
                'picture' => "yellow.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 15,
            ],
            [
                'text' => '',
                'picture' => "green.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 15,
            ],
            [
                'text' => '',
                'picture' => "blue.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 15,
            ],
            // blue
            [
                'text' => '',
                'picture' => "pink.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 16,
            ],
            [
                'text' => '',
                'picture' => "brown.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 16,
            ],
            [
                'text' => '',
                'picture' => "blue.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 16,
            ],
            // purple
            [
                'text' => '',
                'picture' => "red.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 17,
            ],
            [
                'text' => '',
                'picture' => "purple.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 17,
            ],
            [
                'text' => '',
                'picture' => "black.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 17,
            ],
            // pink
            [
                'text' => '',
                'picture' => "pink.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 18,
            ],
            [
                'text' => '',
                'picture' => "red.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 18,
            ],
            [
                'text' => '',
                'picture' => "purple.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 18,
            ],
            // black
            [
                'text' => '',
                'picture' => "green.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 19,
            ],
            [
                'text' => '',
                'picture' => "black.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 19,
            ],
            [
                'text' => '',
                'picture' => "blue.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 19,
            ],
            // brown
            [
                'text' => '',
                'picture' => "red.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 20,
            ],
            [
                'text' => '',
                'picture' => "green.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 20,
            ],
            [
                'text' => '',
                'picture' => "brown.png",
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 20,
            ],
        ];

        foreach ($resources as $item) {
            QuizAnswer::create($item);
        }
    }
}
