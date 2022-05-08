<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sesiones extends Model
{
    use HasFactory;
    protected $table='sesiones';

    protected $fillable = ['id_sala', 'id_pelicula', 'hora_inicio', 'hora_fin', 'dia', 'updated_at', 'created_at'];

}
