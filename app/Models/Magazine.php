<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $fillable = [
        'titolo',
        'numero',
        'anno',
        'casa_editrice',
        'note',
        'url',
        'tag',
    ];
    use HasFactory;
}
