<?php

namespace App\Http\Controllers;
use App\Models\Destacados;
use Illuminate\Http\Request;

class DestacadosController extends Controller
{
    public function index()
    {
        $data=Destacados::all();
        return view('destacados', compact('data'));

    }
}
