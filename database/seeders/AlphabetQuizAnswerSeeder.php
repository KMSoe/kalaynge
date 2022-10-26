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
            // က
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

            // စ
            [
                'text' => 'င',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 2,
            ],
            [
                'text' => 'ည',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 2,
            ],
            [
                'text' => 'စ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 2,
            ],

            // ပ
            [
                'text' => 'ဟ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 3,
            ],
            [
                'text' => 'ပ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 3,
            ],
            [
                'text' => 'အ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 3,
            ],

            // မ
            [
                'text' => 'မ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 4,
            ],
            [
                'text' => 'ခ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 4,
            ],
            [
                'text' => 'တ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 4,
            ],

            // လ
            [
                'text' => 'လ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 5,
            ],
            [
                'text' => 'ပ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 5,
            ],
            [
                'text' => 'ရ',
                'picture' => null,
                'description' => null,
                'audio' => null,
                'video' => null,
                'quiz_question_id' => 5,
            ],
        ];

        foreach ($resources as $item) {
            QuizAnswer::create($item);
        }
    }
}
