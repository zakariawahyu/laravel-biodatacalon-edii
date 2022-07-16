<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users_id')->unsigned();
            $table->string('nama_perusahaan');
            $table->string('posisi_terakhir');
            $table->string('pendapatan_terakhir');
            $table->string('tahun_riwayat_pekerjaan');
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
        Schema::dropIfExists('riwayat_pekerjaan');
    }
}
