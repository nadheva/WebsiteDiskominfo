<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPID extends Model
{
    use HasFactory;
    protected $table = 'PPID';
    protected $fillable = [
        'id', 'judul', 'link', 'jenis'
    ];

    protected $primaryKey = 'id';
}
