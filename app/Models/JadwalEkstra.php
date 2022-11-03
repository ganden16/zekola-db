<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalEkstra extends Model
{
    use HasFactory;

    protected $table = "jadwal_ekstra";
    
    protected $guarded = ['id'];
}
