<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeriVidio extends Model
{
    use HasFactory;
    protected $table = 'galeri_vidio';
    protected $fillable = [
        'judul', 'isi', 'link'
    ];

    protected $primaryKey = 'id';

}
