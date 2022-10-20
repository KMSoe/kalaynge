<?php

namespace Database\Seeders;

use App\Models\QuizQuestion;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
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
                "picture" => "",
                "description" => "",
                "audio" => "",
                "video" => "",
                "game_type" => 1,
                "category_id" => 6
            ]
        ];

        foreach ($resources as $item) {
            QuizQuestion::create($item);
        }        
    }
}
