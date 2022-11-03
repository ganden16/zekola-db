<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ERaportMapel extends Model
{
    use HasFactory;

    protected $table = "e_raport_mapel";
    
    protected $guarded = ['id'];
}
