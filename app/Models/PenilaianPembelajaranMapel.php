<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianPembelajaranMapel extends Model
{
    use HasFactory;

    protected $table = "penilaian_pembelajaran_mapel";
    
    protected $guarded = ['id'];
}
