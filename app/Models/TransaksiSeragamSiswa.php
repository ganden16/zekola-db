<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSeragamSiswa extends Model
{
    use HasFactory;

    protected $table = "transaksi_seragam_siswa";

    protected $guarded = ['id'];
}
