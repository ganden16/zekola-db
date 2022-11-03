<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DinasPendidikan extends Model
{
    use HasFactory;

    protected $table = "dinas_pendidikan";
    
    protected $guarded = ['id'];
}
