<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ofertas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OfertasController extends Controller
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
        $ofertas->heading = $request->input('heading');
        $ofertas->descripcion = $request->input('descripcion');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/ofertas/', $filename);
            $ofertas->image = $filename;
        }
        $ofertas->status = $request->input('status') == true ? '1':'0';
        $ofertas->save();
        return redirect()->back()->with('status','Oferta agregada correctamente');
    }

    public function edit($id)
    {
        $ofertas = Ofertas::find($id);
        return view('admin.ofertas.edit', compact('ofertas'));
    }

    public function update(Request $request, $id)
    {
        $ofertas = Ofertas::find($id);
        $ofertas->heading = $request->input('heading');
        $ofertas->descripcion = $request->input('descripcion');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/ofertas/'.$ofertas->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/ofertas/', $filename);
            $ofertas->image = $filename;
        }
        $ofertas->status = $request->input('status') == true ? '1':'0';
        $ofertas->save();
        return redirect()->back()->with('status','Oferta actualizada correctamente');
    }

    public function destroy($id)
    {
        $ofertas = Ofertas::find($id);

        $destination = 'uploads/ofertas/'.$ofertas->picture;
        if(File::exists($ofertas)){
            File::delete($ofertas);
        }

        $ofertas->delete();

        return redirect()->route('home-ofertas')->with('status','Oferta eliminada correctamente');
    }
}
