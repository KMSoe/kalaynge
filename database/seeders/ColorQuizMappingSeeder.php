<?php

namespace Database\Seeders;

use App\Models\QuizQuestionAnswer;
use Illuminate\Database\Seeder;

class ColorQuizMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = [
            // red
            [
                'quiz_question_id' => 12,
                'quiz_answer_id' => 34,
            ],
            // green
            [
                'quiz_question_id' => 13,
                'quiz_answer_id' => 38,
            ],
            // orange
            [
                'quiz_question_id' => 14,
                'quiz_answer_id' => 42,
            ],
            // yellow
            [
                'quiz_question_id' => 15,
                'quiz_answer_id' => 43,
            ],
            // blue
            [
                'quiz_question_id' => 16,
                'quiz_answer_id' => 48,
            ],
            // purple
            [
                'quiz_question_id' => 17,
                'quiz_answer_id' => 50,
            ],
            // pink
            [
                'quiz_question_id' => 18,
                'quiz_answer_id' => 52,
            ],
            // black
            [
                'quiz_question_id' => 19,
                'quiz_answer_id' => 56,
            ],
            // brown
            [
                'quiz_question_id' => 20,
                'quiz_answer_id' => 60,
            ],
        ];

        foreach ($resource as $item) {
            QuizQuestionAnswer::create($item);
        }
    }
}
