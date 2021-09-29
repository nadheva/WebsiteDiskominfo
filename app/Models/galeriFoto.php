<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeriFoto extends Model
{
    use HasFactory;
    protected $table = 'galeri_foto';
    protected $fillable = [
        'judul', 'isi', 'foto','id_kategorifoto'
    ];

    protected $primaryKey = 'id';

}
