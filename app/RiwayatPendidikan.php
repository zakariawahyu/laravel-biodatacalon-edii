<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $table = 'riwayat_pendidikan';

    protected $fillable = ['jenjang_pend_terakhir', 'nama_instasi','jurusan', 'tahun_lulus','ipk'];
}
