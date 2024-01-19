<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengelolaanKonten extends Model
{
    use HasFactory;

    protected $fillable = [
    // protected $guarded = ['id'];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
        'judul',
        'namaacara',
        'tempat',
        'url',
        'detail',
        'tanggal',
        'img'
    ];
    }

 