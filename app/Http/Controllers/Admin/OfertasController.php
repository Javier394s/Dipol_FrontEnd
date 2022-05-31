<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destacados;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OfertasController extends Controller
{
    public function index()
    {
        $ofertas = Ofertas::all();
        return view('admin.ofertas.index', compact('ofertas'));
    }

    public function create()
    {
        return view('admin.ofertas.create');
    }

    public function store(Request $request)
    {
        $ofertas = new Ofertas;
        $ofertas->name = $request->input('name');
        $ofertas->company_model = $request->input('company_model');
        $ofertas->year_from = $request->input('year_from');
        $ofertas->year_to = $request->input('year_to');
        $ofertas->discount = $request->input('discount');
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/ofertas/', $filename);
            $ofertas->picture = $filename;
        }
        $ofertas->save();
        return redirect()->back()->with('status','ofertas agregado correctamente');
    }

    public function edit($id)
    {
        $ofertas = Ofertas::find($id);
        return view('admin.ofertas.edit', compact('ofertas'));
    }

    public function update(Request $request, $id)
    {
        $ofertas = Destacados::find($id);
        $ofertas->name = $request->input('name');
        $ofertas->company_model = $request->input('company_model');
        $ofertas->year_from = $request->input('year_from');
        $ofertas->year_to = $request->input('year_to');
        $ofertas->discount = $request->input('discount');
        if($request->hasfile('picture'))
        {
            $destination = 'uploads/ofertas/'.$ofertas->picture;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/ofertas/', $filename);
            $ofertas->picture = $filename;
        }
        $ofertas->save();
        return redirect()->back()->with('status','Ofertas actualizado correctamente');
    }

    public function destroy($id)
    {
        $ofertas = Ofertas::find($id);

        $destination = 'uploads/ofertas/'.$destacados->picture;
        if(File::exists($ofertas)){
            File::delete($ofertas);
        }

        $ofertas->delete();

        return redirect()->route('home-ofertas')->with('status','Oferta eliminada correctamente');
    }
}
