<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiSiswaKeluar extends Model
{
    use HasFactory;
    
    protected $table = "mutasi_siswa_keluar";
    
    protected $guarded = ['id'];
}
