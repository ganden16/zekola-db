<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembinaOsis extends Model
{
    use HasFactory;

    protected $table = "pembina_osis";
    
    protected $guarded = ['id'];
}
