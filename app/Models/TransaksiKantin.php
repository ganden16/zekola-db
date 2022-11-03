<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKantin extends Model
{
    use HasFactory;

    protected $table = "transaksi_kantin";

    protected $guarded = ['id'];
}
