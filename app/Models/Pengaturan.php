<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;
    protected $fillable = [
        'namaheader',
        'namapembina',
        'namadepan',
        'alamat',
        'nohp',
        'email',
        'deskdepan',
        'deskkontak',
        'imgpembina'
        
    ];
}
