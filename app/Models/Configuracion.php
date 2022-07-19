<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Configuracion extends Eloquent
{
    protected $fillable  = ['intro','general','info_website','ubicaciones','correo_sa', 'correo_ss', 'wa_sa', 'wa_ss', 'fijo_sa', 'fijo_ss', 'horario_sa', 'horario_ss', 'ubicacion_sa', 'ubicacion_ss'];
    // protected $connection = 'mongodb';
    protected $collection = 'config';
}
