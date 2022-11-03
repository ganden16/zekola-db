<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSekolah extends Model
{
    use HasFactory;

    protected $table = "jadwal_sekolah";
    
    protected $guarded = ['id'];
}
