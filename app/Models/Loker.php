<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $table = 'loker';
    protected $fillable = [
        'id', 'judul', 'posisi', 'link', 'deskripsi'
    ];

    protected $primaryKey = 'id';

}
