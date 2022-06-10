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
                        Editar Producto
                        <a style="margin-left: 500px" href="{{ url('home-products') }}" class="btn btn-danger btn-sm float-right">REGRESAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Marca</label>
                            <input type="text" name="brand" value="{{ $product->brand }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Modelo</label>
                            <textarea name="model" class="form-control">{{ $product->model }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Año(s)</label>
                            <input type="text" name="years" value="{{ $product->years }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nombre del producto</label>
                            <input type="text" name="title" value="{{ $product->title }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Subir imagen</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset('uploads/products/'.$product->image) }}" width="100px" height="50px" alt="product imagen">
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
