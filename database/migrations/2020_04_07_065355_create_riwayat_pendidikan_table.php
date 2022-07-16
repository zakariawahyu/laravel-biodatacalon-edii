<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatPendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users_id')->unsigned();
            $table->string('jenjang_pend_terakhir');
            $table->string('nama_instansi');
            $table->string('jurusan');
            $table->string('tahun_lulus');
            $table->string('ipk');
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
        Schema::dropIfExists('riwayat_pendidikan');
    }
}
