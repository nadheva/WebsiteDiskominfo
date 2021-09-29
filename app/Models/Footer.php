<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';
    protected $fillable = [
        'id', 'logo', 'alamat', 'kontak','pengunjung', 'another_contact'
    ];

    protected $primaryKey = 'id';

}
