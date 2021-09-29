<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;
    protected $table = 'perpustakaan';
    protected $fillable = [
        'id', 'kategori', 'judul', 'penulis', 'penerbit', 'no_panggil', 'ringkasan'
    ];

    protected $primaryKey = 'id';

}
