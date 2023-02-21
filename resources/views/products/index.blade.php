@extends('layouts.admin')

@section('content')

<section style="justify-content:center; align-items: center; display: flex;">
<div class="contaier mt-5" >
    <div class="row">
        <div class="col-md 12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Sliders
                        <a style="margin-left: 500px" href="{{ url('add-product') }}" class="btn btn-primary btn-sm float-right">Agregar Producto</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Encabezado</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slider as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>
                                    <img src="{{ asset('uploads/slider/'.$item->image) }}" width="100px" height="50px" alt="slider imagen">
                                </td>
                                <td>
                                    @if ($item->status == '1')
                                        Oculta
                                    @else
                                        Visible
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('edit-slide/'.$item->id) }}" class="btn btn-success btn-sm">Editar</a>
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
