<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BolsaTrabajo extends Model
{
    public function getRouteKeyName()
    {
       return 'nombre';
    }

    protected $fillable = ['nombre','excerpt','descripcion','published_at'];

}
