<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanFasilitas extends Model
{
    use HasFactory;

    protected $table = "peminjaman_fasilitas";
    
    protected $guarded = ['id'];
}
