<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeragamSiswa extends Model
{
    use HasFactory;

    protected $table = "seragam_siswa";

    protected $guarded = ['id'];
}
