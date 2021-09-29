<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
        'id_periode', 'deskripsi', 'foto'
    ];

    protected $primaryKey = 'id';
    
    public function peiode()
    {
        return $this->belongsTo(Periode::class, 'id_periode', 'id');
    }
}
