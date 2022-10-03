<?php

namespace Database\Seeders;

use App\Models\Alphabet;
use Illuminate\Database\Seeder;

class AlphabetSeeder extends Seeder
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
                "symbol" => "က",
                "name" => "ကကြီး",
                "sample_word" => "ကလေးငယ်",
                "picture" => "kid.png",
                "sorting" => 1,
                "category_id" => 1,
            ],
            [
                "symbol" => "ခ",
                "name" => "ခခွေး",
                "sample_word" => "ခရာတံ",
                "picture" => "khayar.png",
                "sorting" => 2,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဂ",
                "name" => "ဂငယ်",
                "sample_word" => "ဂဏန်းသင်္ချာ",
                "picture" => "numbers.png",
                "sorting" => 3,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဃ",
                "name" => "ဃကြီး",
                "sample_word" => "",
                "picture" => "monk.png",
                "sorting" => 4,
                "category_id" => 1,
            ],
            [
                "symbol" => "င",
                "name" => "င",
                "sample_word" => "ငရုပ်သီး",
                "picture" => "chile.png",
                "sorting" => 5,
                "category_id" => 1,
            ],

            [
                "symbol" => "စ",
                "name" => "စလုံး",
                "sample_word" => "စပျစ်သီး",
                "picture" => "grape.png",
                "sorting" => 6,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဆ",
                "name" => "ဆလိမ်",
                "sample_word" => "ဆရာမ",
                "picture" => "techal.png",
                "sorting" => 7,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဇ",
                "name" => "ဇကွဲ",
                "sample_word" => "ဇလုံလေး",
                "picture" => "bowl.png",
                "sorting" => 8,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဈ",
                "name" => "ဈမျဉ်းဆွဲ",
                "sample_word" => "ဈေးသည်",
                "picture" => "hawder.png",
                "sorting" => 9,
                "category_id" => 1,
            ],
            [
                "symbol" => "ည",
                "name" => "ည",
                "sample_word" => "ညနေခင်း",
                "picture" => "night.png",
                "sorting" => 10,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဋ",
                "name" => "ဋသန်လျင်းချိတ်",
                "sample_word" => "ဋီကာ",
                "picture" => "disquisition.png",
                "sorting" => 11,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဌ",
                "name" => "ဌဝမ်းဘဲ",
                "sample_word" => "သူဌေး",
                "picture" => "boss.png",
                "sorting" => 12,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဍ",
                "name" => "ဍရင်ကောက်",
                "sample_word" => "ဍရင်ကောက်",
                "picture" => "dayinkout.png",
                "sorting" => 13,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဎ",
                "name" => "ဎရေမှုတ်",
                "sample_word" => "ဎရေမှုတ်",
                "picture" => "dayinhhmont.png",
                "sorting" => 14,
                "category_id" => 1,
            ],
            [
                "symbol" => "‌ဏ",
                "name" => "ဏကြီး",
                "sample_word" => "ဏကြီး",
                "picture" => "nagyi.png",
                "sorting" => 15,
                "category_id" => 1,
            ],
            [
                "symbol" => "တ",
                "name" => "တဝမ်းပူ",
                "sample_word" => "တယောတံ",
                "picture" => "violin.png",
                "sorting" => 16,
                "category_id" => 1,
            ],
            [
                "symbol" => "ထ",
                "name" => "ထဆင်ထူး",
                "sample_word" => "ထမင်းပန်းကန်",
                "picture" => "rice_bowl.png",
                "sorting" => 17,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဒ",
                "name" => "ဒထွေး",
                "sample_word" => "ဒရယ်လေး",
                "picture" => "gazella.png",
                "sorting" => 18,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဓ",
                "name" => "ဓအောက်ခြိုက်",
                "sample_word" => "ဓနိပင်",
                "picture" => "straw.png",
                "sorting" => 19,
                "category_id" => 1,
            ],
            [
                "symbol" => "န",
                "name" => "နငယ်",
                "sample_word" => "နဂါးလေး",
                "picture" => "dragon.png",
                "sorting" => 20,
                "category_id" => 1,
            ],
            [
                "symbol" => "ပ",
                "name" => "ပစောက်",
                "sample_word" => "ပထမ",
                "picture" => "first_prize.png",
                "sorting" => 21,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဖ",
                "name" => "ဖဦးထုပ်",
                "sample_word" => "ဖရဲသီး",
                "picture" => "watermelon.png",
                "sorting" => 22,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဗ",
                "name" => "ဗထက်ခြိုက်",
                "sample_word" => "ဗလကြီး",
                "picture" => "a.png",
                "sorting" => 23,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဘ",
                "name" => "ဘကုန်း",
                "sample_word" => "ဘဘကြီး",
                "picture" => "granduncle.png",
                "sorting" => 24,
                "category_id" => 1,
            ],
            [
                "symbol" => "‌မ",
                "name" => "မ",
                "sample_word" => "မိကျောင်းကြီး",
                "picture" => "crocodile.png",
                "sorting" => 25,
                "category_id" => 1,
            ],
            [
                "symbol" => "ယ",
                "name" => "ယပက်လက်",
                "sample_word" => "ယုန်ကလေး",
                "picture" => "rabbit.png",
                "sorting" => 26,
                "category_id" => 1,
            ],
            [
                "symbol" => "ရ",
                "name" => "ရကောက်",
                "sample_word" => "ရထားကြီး",
                "picture" => "train.png",
                "sorting" => 27,
                "category_id" => 1,
            ],
            [
                "symbol" => "လ",
                "name" => "လ",
                "sample_word" => "လမင်းကြီး",
                "picture" => "moon.png",
                "sorting" => 28,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဝ",
                "name" => "ဝ",
                "sample_word" => "ဝက်ဝံလေး",
                "picture" => "bear.png",
                "sorting" => 29,
                "category_id" => 1,
            ],
            [
                "symbol" => "သ",
                "name" => "သ",
                "sample_word" => "သမင်ငယ်",
                "picture" => "deer.png",
                "sorting" => 30,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဟ",
                "name" => "ဟ",
                "sample_word" => "ဟရယ်လိုက်ရ",
                "picture" => "comic.png",
                "sorting" => 31,
                "category_id" => 1,
            ],
            [
                "symbol" => "ဠ",
                "name" => "ဠကြီး",
                "sample_word" => "ဠကြီး",
                "picture" => "lagyi.png",
                "sorting" => 32,
                "category_id" => 1,
            ],
            [
                "symbol" => "အ",
                "name" => "အ",
                "sample_word" => "အမိမြေ",
                "picture" => "homeland.png",
                "sorting" => 33,
                "category_id" => 1,
            ],
        ];

        foreach ($resources as $item) {
            Alphabet::create($item);
        }
    }
}
