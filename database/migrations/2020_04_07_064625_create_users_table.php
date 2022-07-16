<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->string('posisi_dilamar')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('ttl')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('gol_darah')->nullable();
            $table->string('status')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_tinggal')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('orang_terdekat')->nullable();
            $table->string('skill')->nullable();
            $table->string('bersedia_penempatan')->nullable();
            $table->string('penghasilan_diharapkan')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
