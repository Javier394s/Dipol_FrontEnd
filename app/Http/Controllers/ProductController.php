<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Auth;

class ProductController extends Controller
{

    public function index2()
    {
        $data=Product::all();
        return view('products.adminproducts', compact('data'));

    }

    public function index()
    {
        $data=Product::all();
        return view('products.products', compact('data'));

    }

   

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request) //Cambiar
    {
        $product = new Product;
        $product->brand = $request->input('brand');
        $product->model = $request->input('model');
        $product->years = $request->input('years');
        $product->title = $request->input('title');
        $product->dateAdded = date('dd-mm-yyyy');
        $product->addedby = "hola";
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect()->back()->with('status','Producto agregado correctamente');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) //Cambiar
    {
        $product = Product::find($id);
        $product->heading = $request->input('heading');
        $product->descripcion = $request->input('descripcion');
        $product->link = $request->input('link');
        $product->link_name = $request->input('link_name');
        if($request->hasfile('image'))
        {
            $destination = 'uploads/slider/'.$slider->image;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/slider/', $filename);
            $slider->image = $filename;
        }
        $slider->status = $request->input('status') == true ? '1':'0';
        $slider->save();
        return redirect()->back()->with('status','Slider actualizado correctamente');
    }

}
