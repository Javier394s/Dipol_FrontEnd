<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $fillable  = ['codprod', 'nombreprod','descriprod', 'typprod', 'costunit', 'cantprod'];
    protected $connection = 'mongodb';
    protected $collection = 'products';
}
