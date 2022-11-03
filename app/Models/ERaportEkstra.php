<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERaportEkstra extends Model
{
    use HasFactory;

    protected $table = "e_raport_ekstra";
    
    protected $guarded = ['id'];
}
