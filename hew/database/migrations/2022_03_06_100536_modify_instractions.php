<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyInstractions extends Migration
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
            /* $table->integer("likes");
            $table->integer("lines");
            $table->integer("total_lines");
            $table->boolean("is_shared"); */

            $table->unsignedBigInteger("user_id")->change();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
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
