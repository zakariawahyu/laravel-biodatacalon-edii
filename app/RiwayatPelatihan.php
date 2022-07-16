<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPelatihan extends Model
{
    protected $table = 'riwayat_pelatihan';

    protected $fillable = ['nama_pelatihan', 'sertifikat', 'tahun_riwayat_pelatihan'];
}
