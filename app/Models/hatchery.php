<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hatchery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress',
        'city',
        'departament',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function shed()
    {
        return $this->hasMany(shed::class);
    }
}

