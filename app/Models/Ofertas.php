<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ofertas extends Eloquent
{
    protected $fillable  = ['name', 'company_model','year_from', 'year_to', 'discount', 'picture'];
    // protected $connection = 'mongodb';
    protected $collection = 'ofertas';
}
