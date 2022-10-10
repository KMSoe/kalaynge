<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
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
                "name" => "ခွေး",
                "picture" => "dog.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "ကြောင်",
                "picture" => "cat.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "ယုန်",
                "picture" => "rabbit.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "ဝက်ဝံ",
                "picture" => "bear.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "မြင်း",
                "picture" => "horse.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "ငှက်",
                "picture" => "bird.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "သမင်",
                "picture" => "deer.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "ငါး",
                "picture" => "fish.png",
                "description" => "",
                "category_id" => 8,
            ],
            [
                "name" => "ကျား",
                "picture" => "tiger.png",
                "description" => "",
                "category_id" => 8,
            ],
        ];

        foreach ($resources as $item) {
            Animal::create($item);
        }
    }
}
