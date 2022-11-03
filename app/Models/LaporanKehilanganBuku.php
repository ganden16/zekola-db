<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKehilanganBuku extends Model
{
    use HasFactory;

    protected $table = "laporan_kehilangan_buku";
    
    protected $guarded = ['id'];
}
