<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonasiBuku extends Model
{
    use HasFactory;

    protected $table = "donasi_buku";
    
    protected $guarded = ['id'];
}
