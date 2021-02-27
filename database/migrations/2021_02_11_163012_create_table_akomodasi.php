<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAkomodasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_akomodasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wisata')->unsigned();
            $table->string('nama_akomodasi',115);
            $table->text('deskripsi');
            $table->integer('harga');
            // $table->text('gambar');
            $table->timestamps();

            $table->foreign('wisata')->references('wisata_id')->on('m_wisata')->onDelete('restrict');
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
        Schema::table('m_akomodasi', function (Blueprint $table) {
            //
        });
    }
}
