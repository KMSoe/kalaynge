<?php

namespace Database\Seeders;

use App\Models\QuizQuestionAnswer;
use Illuminate\Database\Seeder;

class ShapeQuizMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = [
            // circle
            [
                'quiz_question_id' => 6,
                'quiz_answer_id' => 16,
            ],
            // square
            [
                'quiz_question_id' => 7,
                'quiz_answer_id' => 19,
            ],
            // triangle
            [
                'quiz_question_id' => 8,
                'quiz_answer_id' => 23,
            ],
            // oval
            [
                'quiz_question_id' => 9,
                'quiz_answer_id' => 27,
            ],
            // rectangle
            [
                'quiz_question_id' => 10,
                'quiz_answer_id' => 29,
            ],
            // star
            [
                'quiz_question_id' => 11,
                'quiz_answer_id' => 33,
            ],
        ];

        foreach ($resource as $item) {
            QuizQuestionAnswer::create($item);
        }
    }
}
