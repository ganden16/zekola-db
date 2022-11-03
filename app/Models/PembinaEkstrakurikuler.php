<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembinaEkstrakurikuler extends Model
{
    use HasFactory;

    protected $table = "pembina_ekstrakurikuler";
    
    protected $guarded = ['id'];
}
