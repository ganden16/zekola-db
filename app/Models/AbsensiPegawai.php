<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiPegawai extends Model
{
    use HasFactory;

    protected $table = "absensi_pegawai";
    
    protected $guarded = ['id'];
}
