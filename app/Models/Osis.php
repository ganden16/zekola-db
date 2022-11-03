<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osis extends Model
{
    use HasFactory;

    protected $table = "osis";
    
    protected $guarded = ['id'];
}
