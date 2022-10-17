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
                "symbol" => "၁",
                "name" => "တစ်",
                "picture" => "one.png",
                "sorting" => 1,
                "description" => "",
                "category_id" => 2
            ],

        ];

        foreach ($resources as $item) {
            Shape::create($item);
        }
    }
}
