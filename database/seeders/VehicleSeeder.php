<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
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
                "name" => "စကိတ်",
                "picture" => "skate.png",
                "description" => "",
                "category_id" => 9,
            ],
            [
                "name" => "စက်ဘီး",
                "picture" => "bicycle.png",
                "description" => "",
                "category_id" => 9,
            ],
            [
                "name" => "ဆိုင်ကယ်",
                "picture" => "cycle.png",
                "description" => "",
                "category_id" => 9,
            ],
            [
                "name" => "ကား",
                "picture" => "car.png",
                "description" => "",
                "category_id" => 9,
            ],
            [
                "name" => "လေယာဉ်",
                "picture" => "plane.png",
                "description" => "",
                "category_id" => 9,
            ],
            [
                "name" => "သင်္ဘော",
                "picture" => "ship.png",
                "description" => "",
                "category_id" => 9,
            ],
        ];

        foreach ($resources as $item) {
            Vehicle::create($item);
        }
    }
}
