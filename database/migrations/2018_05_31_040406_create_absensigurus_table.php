<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensigurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensigurus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('keahlian_bidang_studi');
            $table->string('keterangan');
            $table->unsignedInteger('id_gurus');
            $table->foreign('id_gurus')->references('id')->on('gurus')->ondelete('casade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensigurus');
    }
}
