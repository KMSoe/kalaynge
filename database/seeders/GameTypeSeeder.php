<?php

namespace Database\Seeders;

use App\Models\GameType;
use Illuminate\Database\Seeder;

class GameTypeSeeder extends Seeder
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
                "name" => "",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 8,
            ],
        ];

        foreach ($resources as $item) {
            GameType::create($item);
        }
    }
}
