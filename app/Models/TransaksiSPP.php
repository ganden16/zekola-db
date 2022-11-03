<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSPP extends Model
{
    use HasFactory;

    protected $table = "transaksi_spp";

    protected $guarded = ['id'];
}
