<?php

namespace Database\Seeders;

use App\Models\QuizQuestionAnswer;
use Illuminate\Database\Seeder;

class AlpabetQuizMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resource = [
            // က
            [
                'quiz_question_id' => 1,
                'quiz_answer_id' => 1,
            ],
            // စ
            [
                'quiz_question_id' => 2,
                'quiz_answer_id' => 6,
            ],
            // ပ
            [
                'quiz_question_id' => 3,
                'quiz_answer_id' => 8,
            ],
            // မ
            [
                'quiz_question_id' => 4,
                'quiz_answer_id' => 10,
            ],
            // လ
            [
                'quiz_question_id' => 5,
                'quiz_answer_id' => 13,
            ],
        ];

        foreach ($resource as $item) {
            QuizQuestionAnswer::create($item);
        }
    }
}
