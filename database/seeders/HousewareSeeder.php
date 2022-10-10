<?php

namespace Database\Seeders;

use App\Models\Houseware;
use Illuminate\Database\Seeder;

class HousewareSeeder extends Seeder
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
                "name" => "ပြက္ခဒိန်",
                "picture" => "calendar.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "ပိုက်ဆံအိတ်",
                "picture" => "purse.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "သော့",
                "picture" => "lock.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "နာရီ",
                "picture" => "clock.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "တီဗွီ",
                "picture" => "television.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "စုဘူး",
                "picture" => "money_box.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "စားပွဲ",
                "picture" => "table.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "ထိုင်ခုံ",
                "picture" => "chair.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "စာအုပ်စင်",
                "picture" => "book_shelf.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "ရေနွေးအိုး",
                "picture" => "boiler.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "ဓား",
                "picture" => "knife.png",
                "description" => "",
                "category_id" => 11,
            ],
            [
                "name" => "ခွက်",
                "picture" => "cup.png",
                "category_id" => 11,
            ],
        ];

        foreach ($resources as $item) {
            Houseware::create($item);
        }
    }
}
