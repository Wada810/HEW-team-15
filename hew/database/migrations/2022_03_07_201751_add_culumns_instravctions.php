<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCulumnsInstravctions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instractions', function (Blueprint $table) {
            //
            $table->integer("likes");
            $table->integer("lines");
            $table->integer("total_lines");
            $table->boolean("is_shared");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instractions', function (Blueprint $table) {
            //
        });
    }
}
