<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanEkstra extends Model
{
    use HasFactory;

    protected $table = "kegiatan_ekstra";
    
    protected $guarded = ['id'];
}
