@extends('layouts.admin')

@section('content')

<section style="justify-content:center; align-items: center; display: flex;">
    <div class="contaier mt-5">
        <div class="row">
            <div class="col-md 12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Productos
                            <a style="margin-left: 500px" href="{{ url('add-product') }}" class="btn btn-primary btn-sm float-right">Agregar Producto</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Marca</th>
                                    <th>Nombre del producto</th>
                                    <th>Modelo</th>
                                    <th>Imagen</th>
                                    <th>Año(s)</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $product)
                                <tr>
                                <td>{{ $product->brand }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->model }}</td>
                                <td>
                                    <img src="{{ asset('uploads/products/'.$product->image) }}" width="100px" height="50px" alt="product imagen">
                                </td>
                                <td>{{ $product->years }}</td>
                                <td>
                                    <a href="{{ url('edit-product/'.$product->id) }}" class="btn btn-success btn-sm">Editar</a>
                                </td>
                               </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection