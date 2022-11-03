<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiPegawaiMasuk extends Model
{
    use HasFactory;

    protected $table = "mutasi_pegawai_masuk";
    
    protected $guarded = ['id'];
}
