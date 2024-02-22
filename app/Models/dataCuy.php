<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataCuy extends Model
{
    use HasFactory;
    protected $fillable = [
        "age",
        "size_width",
        "size_heigth",
        "weigth",
    ];
}
