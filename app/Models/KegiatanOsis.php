<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanOsis extends Model
{
    use HasFactory;

    protected $table = "kegiatan_osis";
    
    protected $guarded = ['id'];
}
