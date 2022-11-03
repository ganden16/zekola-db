<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiBukuSiswa extends Model
{
    use HasFactory;

    protected $table = "transaksi_buku_siswa";

    protected $guarded = ['id'];
}
