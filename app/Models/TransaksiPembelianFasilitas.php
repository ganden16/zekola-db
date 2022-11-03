<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPembelianFasilitas extends Model
{
    use HasFactory;

    protected $table = "transaksi_pembelian_fasilitas";

    protected $guarded = ['id'];
}
