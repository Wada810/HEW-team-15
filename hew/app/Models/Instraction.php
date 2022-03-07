<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instraction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'theme',
        'instraction',
        'likes',
        'lines',
        'total_lines',
        'is_shared'
    ];

}
