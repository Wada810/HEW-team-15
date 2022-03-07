<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ColorPettern;

class ColorPetternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ColorPettern::create([
            "name" => "emerald",
            "jp_name" => "エメラルド",
            "level" => 1
        ]);
        ColorPettern::create([
            "name" => "emeraldgreen",
            "jp_name" => "エメラルドグリーン",
            "level" => 1
        ]);
        ColorPettern::create([
            "name" => "strawberry",
            "jp_name" => "ストロベリー",
            "level" => 1
        ]);
        ColorPettern::create([
            "name" => "oceanblue",
            "jp_name" => "オーシャンブルー",
            "level" => 2
        ]);
        ColorPettern::create([
            "name" => "grapefruit",
            "jp_name" => "グレープフルーツ",
            "level" => 4
        ]);
        ColorPettern::create([
            "name" => "amethyst",
            "jp_name" => "アメジスト",
            "level" => 6
        ]);
        ColorPettern::create([
            "name" => "depth",
            "jp_name" => "ディープ",
            "level" => 8
        ]);
        ColorPettern::create([
            "name" => "jupiter",
            "jp_name" => "ジュピター",
            "level" => 10
        ]);
        ColorPettern::create([
            "name" => "lipstick",
            "jp_name" => "リップスティック",
            "level" => 12
        ]);
        ColorPettern::create([
            "name" => "roseiron",
            "jp_name" => "ローズアイアン",
            "level" => 14
        ]);
    }
}
