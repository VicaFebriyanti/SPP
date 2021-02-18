<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_bayar', 0);
            $table->string('nisn');
            $table->bigInteger('id_spp')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->integer('jml_bayar');
            $table->timestamps();

            //add relation 
            $table->foreign('nisn')->references('nisn')->on('siswa');
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
        Schema::dropIfExists('pembayaran');
    }
}
