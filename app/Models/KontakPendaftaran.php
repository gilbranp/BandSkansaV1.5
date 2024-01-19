<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakPendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'subjek',
        'pesan'
    ];
}
