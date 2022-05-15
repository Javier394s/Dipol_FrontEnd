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
                        <a style="margin-left: 500px" href="{{ url('add-slide') }}" class="btn btn-primary btn-sm float-right">Agregar Slider</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{--datos de los sliders--}}

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Encabezado</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Acciones</th>
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
                                    <a href="{{ url('edit-slide/'.$item->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$item->id}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @include('admin.slider.delete')
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
