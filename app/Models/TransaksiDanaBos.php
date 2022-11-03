<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDanaBos extends Model
{
    use HasFactory;

    protected $table = "transaksi_dana_bos";

    protected $guarded = ['id'];
}
