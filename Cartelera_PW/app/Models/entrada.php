<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrada extends Model
{
    use HasFactory;
    protected $table='entrada';

    protected $fillable=['id_entrada','id_sesion', 'id_usuario', 'updated_at', 'created_at'];
}
