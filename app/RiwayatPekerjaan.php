<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPekerjaan extends Model
{
    protected $table = 'riwayat_pekerjaan';

    protected $fillable = ['nama_perusahaan', 'posisi_terakhir', 'pendapatan_terakhir', 'tahun_riwayat_pekerjaan'];
}
