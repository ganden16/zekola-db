<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiSiswaMasuk extends Model
{
    use HasFactory;

    protected $table = "mutasi_siswa_masuk";
    
    protected $guarded = ['id'];
}
