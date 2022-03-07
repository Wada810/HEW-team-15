<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IconImage;

class IconImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        IconImage::create([
            "name" => "panda",
            "jp_name" => "パンダ",
            "path" => "panda.png",
            "level" => 1
        ]);
        IconImage::create([
            "name" => "penguin",
            "jp_name" => "ペンギン",
            "path" => "penguin.png",
            "level" => 1
        ]);
        IconImage::create([
            "name" => "sheep",
            "jp_name" => "ひつじ",
            "path" => "sheep.png",
            "level" => 3
        ]);
        IconImage::create([
            "name" => "tiwawa",
            "jp_name" => "チワワ",
            "path" => "tiwawa.png",
            "level" => 5
        ]);
        IconImage::create([
            "name" => "kuma",
            "jp_name" => "くま",
            "path" => "kuma.png",
            "level" => 7
        ]);
        IconImage::create([
            "name" => "wolf",
            "jp_name" => "おおかみ",
            "path" => "wolf.png",
            "level" => 9
        ]);
        IconImage::create([
            "name" => "lion",
            "jp_name" => "ライオン",
            "path" => "lion.png",
            "level" => 11
        ]);
        IconImage::create([
            "name" => "dino",
            "jp_name" => "恐竜",
            "path" => "dino.png",
            "level" => 13
        ]);
    }
}
