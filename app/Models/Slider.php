<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Slider extends Eloquent
{
    protected $collection = 'sliders';
    protected $connection = 'mongodb';
    protected $fillable = [
        'heading',
        'descripcion',
        'link',
        'link_name',
        'image',
        'status',
    ];
}
