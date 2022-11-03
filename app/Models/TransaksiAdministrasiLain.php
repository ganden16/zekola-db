<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiAdministrasiLain extends Model
{
    use HasFactory;

    protected $table = "transaksi_administrasi_lain";

    protected $guarded = ['id'];
}
