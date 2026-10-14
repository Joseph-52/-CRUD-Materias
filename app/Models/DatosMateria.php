<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosMateria extends Model
{
    use HasFactory;
    protected $fillable = [ 'nombre', 'creditos', 'profesor'];
    //protected $table = 'datos_materias';
}
