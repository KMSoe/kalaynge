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
            [
                'quiz_question_id' => 1,
                'quiz_answer_id' => 1,
            ]
        ];

        foreach ($resource as $item) {
            QuizQuestionAnswer::create($item);
        }
    }
}
