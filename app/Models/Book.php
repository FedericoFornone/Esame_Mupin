<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'titolo',
        'autori',
        'casa_editrice',
        'anno_pubblicazione',
        'n_pagine',
        'isbn',
        'note',
        'url',
        'tag',
    ];
    use HasFactory;
}
