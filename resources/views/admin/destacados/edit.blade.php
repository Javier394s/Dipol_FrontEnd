@extends('layouts.admin')
@section('title', 'Edit Destacados')

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
                        Editar Oferta
                        <a style="margin-left: 500px" href="{{ route('home-destacados') }}" class="btn btn-danger btn-sm float-right">REGRESAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('update-destacados', $destacados->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Titulo de la oferta</label>
                            <input type="text" name="name" class="form-control" value="{{ $destacados->name }}">
                        </div>
                        {{--<div class="form-group">
                            <label for="">Marca y Modelo</label>
                            <input type="text" name="company_model" class="form-control" value="{{ $destacados->company_model }}">
                        </div>
                        <div class="form-group">
                            <label for="">Desde que año</label>
                            <input type="text" name="year_from" class="form-control" value="{{ $destacados->year_from }}">
                        </div>
                        <div class="form-group">
                            <label for="">Hasta que año</label>
                            <input type="text" name="year_to" class="form-control" value="{{ $destacados->year_to }}">
                        </div>
                        <div class="form-group">
                            <label for="">Descuento</label>
                            <input type="text" name="discount" class="form-control" value="{{ $destacados->discount }}">
                        </div>
                        <div class="form-group">
                            <label for="">Fecha a eliminar</label>
                            <input type="datetime-local" name="date" class="form-control" value="{{ $destacados->date }}">
                        </div>--}}
                        <div class="form-group pb-2">
                            <label for="">Subir Imagen</label>
                            <input type="file" name="picture" class="form-control" value="{{ $destacados->picture }}">
                            <img src="{{ asset('uploads/destacados/'.$destacados->picture) }}" width="100px" height="50px" alt="ofertas imagen">
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
