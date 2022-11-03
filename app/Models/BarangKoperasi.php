<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKoperasi extends Model
{
    use HasFactory;

    protected $table = "barang_koperasi";
    
    protected $guarded = ['id'];
}
