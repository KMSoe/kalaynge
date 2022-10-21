<?php

namespace Database\Seeders;

use App\Models\QuizAnswer;
use Illuminate\Database\Seeder;

class AlphabetQuizAnswerSeeder extends Seeder
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
                'text' => 'က',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 1,
            ],
            [
                'text' => 'ခ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 1,
            ],
            [
                'text' => 'စ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 1,
            ],
        ];

        foreach ($resources as $item) {
            QuizAnswer::create($item);
        }
    }
}
