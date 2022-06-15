<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destacados;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DestacadosController extends Controller
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
        $destacados = Destacados::all();
        return view('admin.destacados.index', compact('destacados'));
    }

    public function create()
    {
        return view('admin.destacados.create');
    }

    public function store(Request $request)
    {
        $destacados = new Destacados;
        $destacados->name = $request->input('name');
        $destacados->company_model = $request->input('company_model');
        $destacados->year_from = $request->input('year_from');
        $destacados->year_to = $request->input('year_to');
        $destacados->discount = $request->input('discount');
        if($request->hasfile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/destacados/', $filename);
            $destacados->picture = $filename;
        }
        $destacados->save();
        return redirect()->back()->with('status','Destacados agregado correctamente');
    }

    public function edit($id)
    {
        $destacados = Destacados::find($id);
        return view('admin.destacados.edit', compact('destacados'));
    }

    public function update(Request $request, $id)
    {
        $destacados = Destacados::find($id);
        $destacados->name = $request->input('name');
        $destacados->company_model = $request->input('company_model');
        $destacados->year_from = $request->input('year_from');
        $destacados->year_to = $request->input('year_to');
        $destacados->discount = $request->input('discount');
        if($request->hasfile('picture'))
        {
            $destination = 'uploads/destacados/'.$destacados->picture;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/destacados/', $filename);
            $destacados->picture = $filename;
        }
        $destacados->save();
        return redirect()->back()->with('status','Destacados actualizado correctamente');
    }

    public function destroy($id)
    {
        $destacados = Destacados::find($id);

        $destination = 'uploads/destacados/'.$destacados->picture;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $destacados->delete();

        return redirect()->route('home-destacados')->with('status','Destacado eliminado correctamente');
    }
}
