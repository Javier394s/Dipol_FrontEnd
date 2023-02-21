@extends('layouts.admin')

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
                        <a style="margin-left: 500px" href="{{ url('home-ofertas') }}" class="btn btn-danger btn-sm float-right">REGRESAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-ofertas/'.$ofertas->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Encabezado</label>
                            <input type="text" name="heading" value="{{ $ofertas->heading }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea name="descripcion" class="form-control">{{ $ofertas->descripcion }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Subir imagen</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('uploads/ofertas/'.$ofertas->image) }}" width="100px" height="50px" alt="ofertas imagen">
                        </div>
                        <div class="form-group">
                            <label for="">Estado</label><br>
                            <input type="checkbox" name="status" {{ $ofertas->status == '1' ? 'checked':'' }}>  Marcar para ocultar
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
