<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiKoperasi extends Model
{
    use HasFactory;

    protected $table = "pegawai_koperasi";
    
    protected $guarded = ['id'];
}
