<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BuscarPaciente extends Model
{
    public $table = 'buscarpacientes';
    protected $fillable = ['nombre', 'apellidoP', 'apellidoM', 'sexo', 'caracteristicas', 'unidadingreso', 'fechaingreso', ];
    public function getRouteKeyName()
    {
        return 'nombre';
    }
    public static function scopeNombre($query, $nombre)
    {
        if ($nombre)
            return $query->orWhere('nombre', 'LIKE', "%$nombre%");
    }

    public static function scopeApepaterno($query, $apepaterno)
    {
        if ($apepaterno)
            return $query->orWhere('apellidoP', 'LIKE', "%$apepaterno%");
    }

    public static function scopeapematerno($query, $apematerno)
    {
        if ($apematerno)
            return $query->orWhere('apellidoM', 'LIKE', "%$apematerno%");
    }
   
}

