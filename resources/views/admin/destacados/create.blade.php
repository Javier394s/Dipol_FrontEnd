@extends('layouts.admin')
@section('title', 'Add Destacados')
@section('content')

<section style="justify-content:center; align-items: center; display: flex;">
<div class="contaier mt-5" >
    <div class="row">
        <div class="col-md 12">
            @if (session('status'))
                <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        Agregar Destacados
                        <a style="margin-left: 500px" href="{{ route('home-destacados') }}" class="btn btn-danger btn-sm float-right">REGRESAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('store-destacados') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="">Nombre del repuesto</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Marca y Modelo</label>
                            <input type="text" name="company_model" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Desde que año</label>
                            <input type="text" name="year_from" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Hasta que año</label>
                            <input type="text" name="year_to" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Descuento</label>
                            <input type="text" name="discount" class="form-control">
                        </div>
                        <div class="form-group pb-2">
                            <label for="">Subir Imagen</label>
                            <input type="file" name="picture" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
