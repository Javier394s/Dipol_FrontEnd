<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ofertas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Configuracion;

class ConfigController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $config = Configuracion::first();
        return view('admin.config', compact('config'));
    }

    public function update(Request $request)
    {
        $config = Configuracion::first();
        $config->intro = $request->input('intro');
        $config->general = $request->input('general');
        $config->info_website = $request->input('info_website');
        $config->ubicaciones = $request->input('ubicaciones');
        $config->correo_sa = $request->input('correo_sa');
        $config->correo_ss = $request->input('correo_ss');
        $config->wa_sa = $request->input('wa_sa');
        $config->wa_ss = $request->input('wa_ss');
        $config->fijo_sa = $request->input('fijo_sa');
        $config->fijo_ss = $request->input('fijo_ss');
        $config->save();
        return redirect()->back()->with('status','Configuración actualizada correctamente');
    }

}
