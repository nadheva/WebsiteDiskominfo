<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeriFoto extends Model
{
    use HasFactory;


    public function periode()
    {
        return $this->belongsTo(Periode::class, 'id_periode', 'id');
    }
}
