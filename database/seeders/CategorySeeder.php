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
            ["name" => "ကခဂ အက္ခရာများ", "description" => ""],
            ["name" => "၁၂၃ ကိန်းဂဏန်းများ", "description" => ""],
            ["name" => "ချစ်စဖွယ်ပုံသဏ္ဍာန်များ", "description" => ""],
            ["name" => "သင်ယူစရာ အရောင်များ", "description" => ""],
            ["name" => "လေ့လာစရာ အရာဝတ္ထုများ", "description" => ""],
            ["name" => "ပျော်ရွှင်ဖွယ်ရာ ဂိမ်းကမ္ဘာ", "description" => ""],
            ["name" => "သဘာဝ ပတ်ဝန်းကျင်", "description" => ""],
            ["name" => "ချစ်စဖွယ် တိရစ္ဆာန်လေးများ", "description" => ""],
            ["name" => "စီးစရာ ယာဉ်များ", "description" => ""],
            ["name" => "လတ်ဆတ်သော အသီးအနှံများ", "description" => ""],
            ["name" => "အိမ်သုံး ပစ္စည်းများ", "description" => ""],
        ];

        foreach ($resources as $item) {
            Category::create($item);
        }
    }
}
