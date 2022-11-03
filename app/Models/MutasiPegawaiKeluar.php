<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiPegawaiKeluar extends Model
{
    use HasFactory;

    protected $table = "mutasi_pegawai_keluar";
    
    protected $guarded = ['id'];
}
