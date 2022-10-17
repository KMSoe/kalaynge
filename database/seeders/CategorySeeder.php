<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            ["name" => "ကခဂ အက္ခရာများ", "description" => "", "symbol_picture" => ""],
            ["name" => "၁၂၃ ကိန်းဂဏန်းများ", "description" => "", "symbol_picture" => ""],
            ["name" => "ချစ်စဖွယ်ပုံသဏ္ဍာန်များ", "description" => "", "symbol_picture" => ""],
            ["name" => "သင်ယူစရာ အရောင်များ", "description" => "", "symbol_picture" => ""],
            ["name" => "လေ့လာစရာ အရာဝတ္ထုများ", "description" => "", "symbol_picture" => ""],
            ["name" => "ပျော်ရွှင်ဖွယ်ရာ ဂိမ်းကမ္ဘာ", "description" => "", "symbol_picture" => ""],
            ["name" => "သဘာဝ ပတ်ဝန်းကျင်", "description" => "", "symbol_picture" => ""],
            ["name" => "ချစ်စဖွယ် တိရစ္ဆာန်လေးများ", "description" => "", "symbol_picture" => ""],
            ["name" => "စီးစရာ ယာဉ်များ", "description" => "", "symbol_picture" => ""],
            ["name" => "လတ်ဆတ်သော အသီးအနှံများ", "description" => "", "symbol_picture" => ""],
            ["name" => "အိမ်သုံး ပစ္စည်းများ", "description" => "", "symbol_picture" => ""],
        ];

        foreach ($resources as $item) {
            Category::create($item);
        }
    }
}
