<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class DirectorioDoctor extends Model
{
    protected $fillable = ['nombre', 'especialidad', 'subespecialidad','telefono', 'consultorio'];
    public function getRouteKeyName()
    {
        return 'nombre';
    }

    public static function scopeNombre($query, $nombre)
    {
        if ($nombre)
            return $query->orWhere('nombre', 'LIKE', "%$nombre%");
    }


    public static function scopeEspecialidad($query, $especialidad)
    {
        if ($especialidad)
            return $query->orWhere('especialidad', 'LIKE', "%$especialidad%");
    }

    public static function scopeSubespecialidad($query, $subespecialidad)
    {
        if ($subespecialidad)
            return $query->orWhere('subespecialidad', 'LIKE', "%$subespecialidad%");
    }

} 
