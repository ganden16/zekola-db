<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PegawaiPerpustakaan extends Model
{
    use HasFactory;

    protected $table = "pegawai_perpustakaan";
    
    protected $guarded = ['id'];
}
