<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $items=[
        [
            "name" => "Vincent",
            "img_path"=> "img/Pfp/Vincent.jpg",
            "category_id"=> "1",
            "rarity"=> "6",
        ],
        [
            "name" => "Anime Steve Jobs",
            "img_path"=> "img/Pfp/steveJobsAnime.png",
            "category_id"=> "1",
            "rarity"=> "1",
        ],
        [
            "name" => "Squidward",
            "img_path"=> "img/Pfp/squidward.webp",
            "category_id"=> "1",
            "rarity"=> "1",
        ],
        [
        "name" => "Mutant Apple Fan",
        "img_path"=> "img/Pfp/MutantAppleFan.webp",
        "category_id"=> "1",
        "rarity"=> "3",
        ],
        [
            "name" => "Mutant Apple Fan twee",
            "img_path"=> "img/Pfp/MutantAppleFan2.webp",
            "category_id"=> "1",
            "rarity"=> "3",
        ],
        [
            "name" => "Fuuka Gun",
            "img_path"=> "img/Pfp/FuukaGun.png",
            "category_id"=> "1",
            "rarity"=> "2",
        ],
        [
            "name" => "Giga Chad",
            "img_path"=> "img/Pfp/gigaChad.webp",
            "category_id"=> "1",
            "rarity"=> "5",
        ],
        [
            "name" => "Sad Under The Rainbow",
            "img_path"=> "img/Pfp/sadUnderTheRainbow.webp",
            "category_id"=> "1",
            "rarity"=> "1",
        ],
        [
            "name" => "Sausage Fan",
            "img_path"=> "img/Pfp/sausageFan.webp",
            "category_id"=> "1",
            "rarity"=> "4",
        ],
        [
            "name" => "Sausage With Fans",
            "img_path"=> "img/Pfp/sausagewithfans.webp",
            "category_id"=> "1",
            "rarity"=> "4",
        ],
        [
            "name" => "Vincent Hooft",
            "img_path"=> "img/Pfp/vincentHooft.webp",
            "category_id"=> "1",
            "rarity"=> "5",
        ],
        [
            "name" => "Crying Emoji",
            "img_path"=> "img/Emoji/cryingEmoji.gif",
            "category_id"=> "2",
            "rarity"=> "1",
        ],
        [
            "name" => "Dab Emoji",
            "img_path"=> "img/Emoji/dabEmoji.gif",
            "category_id"=> "2",
            "rarity"=> "6",
        ],
        [
            "name" => "Dancing Banana",
            "img_path"=> "img/Emoji/giphy.gif",
            "category_id"=> "2",
            "rarity"=> "4",
        ],
        [
            "name" => "No Emoji",
            "img_path"=> "img/Emoji/noEmoji.gif",
            "category_id"=> "2",
            "rarity"=> "2",
        ],
        [
            "name" => "Thinking Emoji",
            "img_path"=> "img/Emoji/output.gif",
            "category_id"=> "2",
            "rarity"=> "5",
        ],
        [
            "name" => "Smug Emoji",
            "img_path"=> "img/Emoji/smug.gif",
            "category_id"=> "2",
            "rarity"=> "1",
        ],

    ];
        foreach ($items as $item) {
            $item = Item::create($item);
        }

    }
}
