<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $fillable  = ['brand', 'model','years', 'image' ,'title', 'dateAdded', 'addedby', 'datetoFinish'];
    protected $connection = 'mongodb';
    protected $collection = 'products';
}
