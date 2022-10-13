<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
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
                "name" => "အနီရောင်",
                "color_code" => "#FF0000",
                "symbol_picture" => "red.png",
                "pictures" => ["red_1.png", "red_2.png", "red_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "အစိမ်းရောင်",
                "color_code" => "#008000",
                "symbol_picture" => "green.png",
                "pictures" => ["green_1.png", "green_2.png", "green_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "လိမ္မော်ရောင်",
                "color_code" => "#FFA500",
                "symbol_picture" => "orange.png",
                "pictures" => ["orange_1.png", "orange_2.png", "orange_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "အဝါရောင်",
                "color_code" => "#FFFF00",
                "symbol_picture" => "yellow.png",
                "pictures" => ["yellow_1.png", "yellow_2.png", "yellow_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "အပြာရောင်",
                "color_code" => "#0000FF",
                "symbol_picture" => "blue.png",
                "pictures" => ["blue_1.png", "blue_2.png", "blue_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "ခရမ်းရောင်",
                "color_code" => "#800080",
                "symbol_picture" => "purple.png",
                "pictures" => ["purple_1.png", "purple_2.png", "purple_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "ပန်းရောင်",
                "color_code" => "#FFC0CB",
                "symbol_picture" => "pink.png",
                "pictures" => ["pink_1.png", "pink_2.png", "pink_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "အနက်ရောင်",
                "color_code" => "#000000",
                "symbol_picture" => "black.png",
                "pictures" => ["black_1.png", "black_2.png", "black_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
            [
                "name" => "အညိုရောင်",
                "color_code" => "#A52A2A",
                "symbol_picture" => "brown.png",
                "pictures" => ["brown_1.png", "brown_2.png", "brown_3.png"],
                "description" => "",
                "category_id" => 4,
            ],
        ];

        foreach ($resources as $item) {
            Color::create($item);
        }
    }
}
