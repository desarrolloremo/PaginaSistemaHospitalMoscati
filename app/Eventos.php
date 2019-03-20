<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $dates = ["fechaevento"];
    protected $fillable = ['nombre', 'tipoevento', 'duracion', 'lugar','fechaevento','body'];
    public function getRouteKeyName()
    {
        return 'nombre';
    }
}
