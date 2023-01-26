<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
                "name" => "profiel picture",
            ],
            [
                "name" =>"emoji"
            ]
        ];
        foreach ($categories as $category) {
            $category = Category::create($category);
        }
    }
}
