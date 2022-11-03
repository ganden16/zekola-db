<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiEkstra extends Model
{
    use HasFactory;

    protected $table = "absensi_ekstra";
    
    protected $guarded = ['id'];
}
