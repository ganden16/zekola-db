<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKoperasi extends Model
{
    use HasFactory;

    protected $table = "transaksi_koperasi";

    protected $guarded = ['id'];
}
