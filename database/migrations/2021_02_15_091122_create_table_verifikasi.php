<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVerifikasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_verifikasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wisata',115);
            $table->string('user',115);

            $table->timestamps();

            // $table->foreign('wisata')->references('wisata_id')->on('m_wisata')->onDelete('restrict');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_verifikasi', function (Blueprint $table) {
            //
        });
    }
}
