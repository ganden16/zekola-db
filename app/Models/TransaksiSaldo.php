<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSaldo extends Model
{
    use HasFactory;

    protected $table = "transaksi_saldo";

    protected $guarded = ['id'];
}
