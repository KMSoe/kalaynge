<?php

namespace Database\Seeders;

use App\Models\Number;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            ["symbol" => "၁", "name" => "တစ်", "picture" => "one.png", "sorting" => 1, "description" => "", "category_id" => 2],
            ["symbol" => "၂", "name" => "နှစ်", "picture" => "two.png", "sorting" => 2, "description" => "", "category_id" => 2],
            ["symbol" => "၃", "name" => "သုံး", "picture" => "three.png", "sorting" => 3, "description" => "", "category_id" => 2],
            ["symbol" => "၄", "name" => "လေး", "picture" => "four.png", "sorting" => 4, "description" => "", "category_id" => 2],
            ["symbol" => "၅", "name" => "ငါး", "picture" => "five.png", "sorting" => 5, "description" => "", "category_id" => 2],
            ["symbol" => "၆", "name" => "ခြောက်", "picture" => "six.png", "sorting" => 6, "description" => "", "category_id" => 2],
            ["symbol" => "၇", "name" => "ခုနှစ်", "picture" => "seven.png", "sorting" => 7, "description" => "", "category_id" => 2],
            ["symbol" => "၈", "name" => "ရှစ်", "picture" => "eight.png", "sorting" => 8, "description" => "", "category_id" => 2],
            ["symbol" => "၉", "name" => "ကိုး", "picture" => "nine.png", "sorting" => 9, "description" => "", "category_id" => 2],
            ["symbol" => "၁၀", "name" => "တစ်ဆယ်", "picture" => "ten.png", "sorting" => 10, "description" => "", "category_id" => 2],
        ];

        foreach ($resources as $item) {
            Number::create($item);
        }
    }
}
