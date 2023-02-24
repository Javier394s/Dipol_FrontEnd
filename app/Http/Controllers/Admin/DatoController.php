<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DatoController extends Controller
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
        $dato = Dato::all();
        return view('admin.datos.index', compact('dato'));
    }

    public function create()
    {
        return view('admin.datos.create');
    }

    public function store(Request $request)
    {
        $dato = new Dato;
        $dato->intro = $request->input('intro');
        $dato->general = $request->input('general');
        $dato->info_website = $request->input('info_website');
        $dato->wa_matriz = $request->input('wa_matriz');
        $dato->wa_sa = $request->input('wa_sa');
        $dato->wa_ss = $request->input('wa_ss');
        $dato->fijo_matriz = $request->input('fijo_matriz');
        $dato->fijo_sa = $request->input('fijo_sa');
        $dato->fijo_ss = $request->input('fijo_ss');
        $dato->horario_matriz_semana = $request->input('horario_matriz_semana');
        $dato->horario_matriz_sabado = $request->input('horario_matriz_sabado');
        $dato->horario_matriz_domingo = $request->input('horario_matriz_domingo');
        $dato->horario_sa_semana = $request->input('horario_sa_semana');
        $dato->horario_sa_sabado = $request->input('horario_sa_sabado');
        $dato->horario_sa_domingo = $request->input('horario_sa_domingo');
        $dato->horario_ss_semana = $request->input('horario_ss_semana');
        $dato->horario_ss_sabado = $request->input('horario_ss_sabado');
        $dato->horario_ss_domingo = $request->input('horario_ss_domingo');
        $dato->save();
        return redirect()->back()->with('status','Datos agregados correctamente');
    }

    public function edit($id)
    {
        $dato = Dato::find($id);
        return view('admin.datos.edit', compact('dato'));
    }

    public function update(Request $request, $id)
    {
        $dato = Dato::find($id);
        $dato->intro = $request->input('intro');
        $dato->general = $request->input('general');
        $dato->info_website = $request->input('info_website');
        $dato->wa_matriz = $request->input('wa_matriz');
        $dato->wa_sa = $request->input('wa_sa');
        $dato->wa_ss = $request->input('wa_ss');
        $dato->fijo_matriz = $request->input('fijo_matriz');
        $dato->fijo_sa = $request->input('fijo_sa');
        $dato->fijo_ss = $request->input('fijo_ss');
        $dato->horario_matriz_semana = $request->input('horario_matriz_semana');
        $dato->horario_matriz_sabado = $request->input('horario_matriz_sabado');
        $dato->horario_matriz_domingo = $request->input('horario_matriz_domingo');
        $dato->horario_sa_semana = $request->input('horario_sa_semana');
        $dato->horario_sa_sabado = $request->input('horario_sa_sabado');
        $dato->horario_sa_domingo = $request->input('horario_sa_domingo');
        $dato->horario_ss_semana = $request->input('horario_ss_semana');
        $dato->horario_ss_sabado = $request->input('horario_ss_sabado');
        $dato->horario_ss_domingo = $request->input('horario_ss_domingo');
        $dato->save();
        return redirect()->back()->with('status','Datos editados correctamente');
    }
}
