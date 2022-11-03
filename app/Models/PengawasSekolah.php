<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengawasSekolah extends Model
{
    use HasFactory;

    protected $table = "pengawas_sekolah";
    
    protected $guarded = ['id'];
}
