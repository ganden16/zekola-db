<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TU extends Model
{
    use HasFactory;

    protected $table = "tu";

    protected $guarded = ['id'];
}
