<?php

namespace Database\Seeders;

use App\Models\Nature;
use Illuminate\Database\Seeder;

class NatureSeeder extends Seeder
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
                "name" => "နေမင်း",
                "picture" => "sun.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "သက်တန့်",
                "picture" => "rainbow.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "တိမ်",
                "picture" => "cloud.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "လမင်း",
                "picture" => "moon.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "မုန်တိုင်း",
                "picture" => "storm.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "ကြယ်",
                "picture" => "star.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "အိမ်",
                "picture" => "home.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "တောင်တန်း",
                "picture" => "mountain.png",
                "description" => "",
                "category_id" => 7,
            ],
            [
                "name" => "တောအုပ်",
                "picture" => "grove.png",
                "description" => "",
                "category_id" => 7,
            ],
        ];

        foreach ($resources as $item) {
            Nature::create($item);
        }
    }
}
