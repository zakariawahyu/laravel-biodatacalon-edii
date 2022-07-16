<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPelatihanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pelatihan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users_id')->unsigned();
            $table->string('nama_pelatihan');
            $table->string('sertifikat');
            $table->string('tahun_riwayat_pelatihan');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pelatihan');
    }
}
