<?php

namespace Database\Seeders;

use App\Models\Fruit;
use Illuminate\Database\Seeder;

class FruitSeeder extends Seeder
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
                "name" => "ဖရဲသီး",
                "picture" => "watermelon.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "လိမ္မော်သီး",
                "picture" => "orange.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "ငှက်ပျောသီး",
                "picture" => "banana.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "စတော်ဘယ်ရီ",
                "picture" => "strawberry.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "စပျစ်သီး",
                "picture" => "grape.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "ထော်ပတ်သီး",
                "picture" => "avocado.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "ကီဝီသီး",
                "picture" => "kiwi.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "သလဲသီး",
                "picture" => "pomegrante.png",
                "description" => "",
                "category_id" => 10,
            ],
            [
                "name" => "ချယ်ရီသီး",
                "picture" => "cherry.png",
                "description" => "",
                "category_id" => 10,
            ],
        ];

        foreach ($resources as $item) {
            Fruit::create($item);
        }
    }
}
