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
                "name" => "ကခဂ အက္ခရာများ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "၁၂၃ ကိန်းဂဏန်းများ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "ချစ်စဖွယ်ပုံသဏ္ဍာန်များ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "အရောင်များ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "အရာဝတ္ထုများ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "သဘာဝ ပတ်ဝန်းကျင်",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "တိရစ္ဆာန်လေးများ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "စီးစရာ ယာဉ်များ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "လတ်ဆတ်သော အသီးအနှံများ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ],
            [
                "name" => "အိမ်သုံး ပစ္စည်းများ",
                "picture" => "",
                "audio" => "",
                "video" => "",
                "description" => "",
                "category_id" => 6,
            ]
        ];

        foreach ($resources as $item) {
            GameType::create($item);
        }
    }
}