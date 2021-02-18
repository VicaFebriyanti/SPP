<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nisn');
            $table->string('nis');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->bigInteger('id_kelas')->unsigned();
            $table->bigInteger('id_spp')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->timestamps();

            //add primary and field unique
            $table->primary('nisn');

            //add relation 
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_spp')->references('id')->on('spp');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
