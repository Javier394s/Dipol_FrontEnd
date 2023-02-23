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
        $dato = Dato::first();
        return view('admin.datos.index', compact('dato'));
    }

    public function create()
    {
        return view('admin.datos.create');
    }
}
