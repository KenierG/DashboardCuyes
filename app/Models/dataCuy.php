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
    public function cuy()
    {
        return $this->belongsTo(cuy::class, 'cuy_id'); // 'user_id' es el nombre de la columna de la clave foránea en la tabla 'posts'
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'state_healts_id');
    }

}
