<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiOsis extends Model
{
    use HasFactory;

    protected $table = "absensi_osis";
    
    protected $guarded = ['id'];
}
