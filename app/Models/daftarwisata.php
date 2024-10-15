<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarwisata extends Model
{
    use HasFactory;
    protected $table = 'daftarwisatas';
    protected $fillable = [
        'gambar',
        'nama_wisata',
        'kategori',
    ];
}
