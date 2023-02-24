<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destacados;
use App\Models\Slider;
use App\Models\Ofertas;
use App\Models\Configuracion;
use App\Models\Dato;

class FrontendController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status','0')->get();
        $ofertas = Ofertas::where('status','0')->get();
        $destacados = Destacados::all();
        $config = Configuracion::first();
        $dato = Dato::all();
        return view('frontend.default', compact('slider', 'destacados', 'ofertas', 'config', 'dato'));
    }
}
