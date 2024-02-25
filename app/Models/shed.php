<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shed extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function hatchery()
    {
        return $this->belongsTo(Hatchery::class, 'hatcheries_id'); // 'user_id' es el nombre de la columna de la clave foránea en la tabla 'posts'
    }
    public function cuy()
    {
        return $this->hasMany(cuy::class);
    }
}
