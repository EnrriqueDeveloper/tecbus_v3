<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutaParadero extends Model
{
    use HasFactory;
    protected $fillable = ['num_ruta','n_paradero','hora_partida'];

}
