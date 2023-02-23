@extends('layouts.admin')

@section('content')

<section style="justify-content:center; align-items: center; display: flex;">
    <div class="contaier mt-5" >
        <div class="row">
            <div class="col-md 12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Datos
                            <a style="margin-left: 500px" href="{{ url('add-datos') }}" class="btn btn-primary btn-sm float-right">Agregar Datos</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {{--datos de las sucursales--}}

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Datos de las sucursales</th>
                                    <th>Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{--@foreach ($dato as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->intro }}</td>
                                    <td>{{ $item->general }}</td>
                                    <td>{{ $item->info_website }}
                                    <td>{{ $item->wa_matriz }}</td>
                                    <td>{{ $item->wa_sa }}</td>
                                    <td>{{ $item->wa_ss }}</td>
                                    <td>{{ $item->fijo_matriz }}</td>
                                    <td>{{ $item->fijo_sa }}</td>
                                    <td>{{ $item->fijo_ss }}</td>
                                    <td>{{ $item->horario_matriz }}</td>
                                    <td>{{ $item->horario_sa }}</td>
                                    <td>{{ $item->horario_ss }}
                                    <td>
                                        <a href="{{ url('edit-datos/'.$item->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>

                                @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
