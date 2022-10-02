<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $fillable = [
        'titolo',
        'os',
        'tipologia',
        'supporto',
        'note',
        'url',
        'tag',
    ];
    use HasFactory;
}
