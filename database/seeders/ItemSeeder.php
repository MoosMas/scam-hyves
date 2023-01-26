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
            "img_path"=> "img/Vincent.jpg",
            "category_id"=> "1",
            "rarity"=> "6",
        ],
        [
            "name" => "Anime Steve Jobs",
            "img_path"=> "img/steveJobsAnime.png",
            "category_id"=> "1",
            "rarity"=> "1",
        ],
        [
            "name" => "Squidward",
            "img_path"=> "img/squidward.webp",
            "category_id"=> "1",
            "rarity"=> "1",
        ]
    ];
        foreach ($items as $item) {
            $item = Item::create($item);
        }

    }
}
