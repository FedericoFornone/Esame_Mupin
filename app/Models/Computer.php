<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'modello',
        'anno',
        'cpu',
        'velocita',
        'memoria',
        'hard_disk',
        'os',
        'note',
        'url',
        'tag',
    ];
    use HasFactory;
}
