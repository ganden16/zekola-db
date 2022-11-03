<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaEkstra extends Model
{
    use HasFactory;

    protected $table = "anggota_ekstra";
    
    protected $guarded = ['id'];
}
