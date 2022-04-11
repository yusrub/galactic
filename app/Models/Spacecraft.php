<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spacecraft extends Model
{
    use HasFactory;

    protected $casts = [
        'armament' => 'array',
    ];

    protected $fillable = [
        'name',
        'class',
        'crew',
        'image',
        'value',
        'status',
        'armament',
    ];

}
