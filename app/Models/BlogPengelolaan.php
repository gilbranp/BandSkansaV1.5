<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPengelolaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tema',
        'judul',
        'deskripsi',
        'penulis',
        'tag',
        'tanggal',
        'img'
    ];
}
