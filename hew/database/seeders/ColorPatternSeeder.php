<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colorpettarn;

class ColorPatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Colorpettarn::create([
            "name" => "",
            "level" => "1"
        ]);
    }
}
