<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $table = 'calender';
    protected $fillable = [
        'id_periode',
        'foto',
        'deskripsi',
    ];

    protected $primaryKey = 'id';

    
    public function peiode()
    {
        return $this->belongsTo(Periode::class, 'id_periode', 'id');
    }
}
