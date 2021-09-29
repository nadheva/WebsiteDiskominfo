<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriFoto extends Model
{
    use HasFactory;
    protected $table = 'kategori_foto';
    protected $fillable = [
        'judul', 'isi'
    ];

    protected $primaryKey = 'id';

}
