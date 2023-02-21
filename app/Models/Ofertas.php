<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ofertas extends Eloquent
{
    protected $collection = 'ofertas';
    protected $fillable  = [
    'heading',
    'descripcion',
    'image',
    'status',
    ];
    // protected $connection = 'mongodb';

}
