<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiSiswaHarian extends Model
{
    use HasFactory;

    protected $table = "absensi_siswa_harian";
    
    protected $guarded = ['id'];
}
