<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Dato extends Eloquent
{
    protected $collection = 'datos';
    // protected $connection = 'mongodb';
    protected $fillable  = [
        'intro',
        'general',
        'info_website',
        'wa_matriz',
        'wa_sa',
        'wa_ss',
        'fijo_matriz',
        'fijo_sa',
        'fijo_ss',
        'horario_matriz_semana',
        'horario_matriz_sabado',
        'horario_matriz_domingo',
        'horario_sa_semana',
        'horario_sa_sabado',
        'horario_sa_domingo',
        'horario_ss_semana',
        'horario_ss_sabado',
        'horario_ss_domingo',
    ];
    // protected $connection = 'mongodb';

}
