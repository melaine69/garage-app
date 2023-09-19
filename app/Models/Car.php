<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'brand',
        'model',
        'year',
        'km',
        'description',
        'image',
        'price',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
