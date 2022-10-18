<?php

namespace Database\Seeders;

use App\Models\Shape;
use Illuminate\Database\Seeder;

class ShapeSeeder extends Seeder
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
                "name" => "စက်ဝိုင်း",
                "symbol_picture" => "circle.png",
                "pictures" => ["circle_1.png", "circle_2.png", "circle_3.png"],
                "description" => "",
                "audio" => "",
                "video" => "",
                "category_id" => 4,
            ],
            [
                "name" => "စတုရန်း",
                "symbol_picture" => "square.png",
                "pictures" => ["square_1.png", "square_2.png", "square_3.png"],
                "description" => "",
                "audio" => "",
                "video" => "",
                "category_id" => 4,
            ],
            [
                "name" => "တြိဂံ",
                "symbol_picture" => "triangle.png",
                "pictures" => ["triangle_1.png", "triangle_2.png", "triangle_3.png"],
                "description" => "",
                "audio" => "",
                "video" => "",
                "category_id" => 4,
            ],
            [
                "name" => "ဘဲဥပုံ",
                "symbol_picture" => "oval.png",
                "pictures" => ["oval_1.png", "oval_2.png", "oval_3.png"],
                "description" => "",
                "audio" => "",
                "video" => "",
                "category_id" => 4,
            ],
            [
                "name" => "စတုဂံ",
                "symbol_picture" => "rectangle.png",
                "pictures" => ["rectangle_1.png", "rectangle_2.png", "rectangle_3.png"],
                "description" => "",
                "audio" => "",
                "video" => "",
                "category_id" => 4,
            ],
            [
                "name" => "ကြယ်ပုံ",
                "symbol_picture" => "star.png",
                "pictures" => ["star_1.png", "star_2.png", "star_3.png"],
                "description" => "",
                "audio" => "",
                "video" => "",
                "category_id" => 4,
            ],
        ];

        foreach ($resources as $item) {
            Shape::create($item);
        }
    }
}
