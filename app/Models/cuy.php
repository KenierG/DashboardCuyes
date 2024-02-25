<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuy extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'size_width',
        'size_heigth',
        'weigth',
    ];
    public function cuy()
    {
        return $this->belongsTo(shed::class, 'sheds_id');
    }
    public function dataCuy()
    {
        return $this->hasMany(dataCuy::class);
    }
}
