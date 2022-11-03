<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuSiswa extends Model
{
    use HasFactory;

    protected $table = "buku_siswa";
    
    protected $guarded = ['id'];
}
