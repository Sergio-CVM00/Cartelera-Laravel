<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peliculas extends Model
{
    use HasFactory;
    protected $table='peliculas';

    protected $fillable = ['titulo', 'duracion', 'genero', 'estreno', 'director', 'portada', 'sinopsis', 'updated_at', 'created_at'];
}
