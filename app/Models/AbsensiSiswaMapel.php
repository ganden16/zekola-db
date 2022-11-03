<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiSiswaMapel extends Model
{
    use HasFactory;

    protected $table = "absensi_siswa_mapel";
    
    protected $guarded = ['id'];
}
