@extends('layouts.admin')
@section('title', 'Destacados')
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
                        Ofertas
                        <a style="margin-left: 700px" href="{{ route('add-destacados') }}" class="btn btn-primary btn-sm float-right">Agregar Ofertas</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{--datos de los destacados--}}

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Marca - Modelo</th>
                                <th>Desde que año</th>
                                <th>Hasta que año</th>
                                <th>Descuento</th>
                                <th>Fecha a eliminar</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($destacados as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('uploads/destacados/'.$item->picture) }}" width="100px" height="50px" alt="destacados imagen">
                                </td>
                                <td>{{ $item->company_model }}</td>
                                <td>{{ $item->year_from }}</td>
                                <td>{{ $item->year_to }}</td>
                                <td>{{ $item->discount }}</td>
                                <td>{{ $item->date }}</td>
                                <td>
                                    <a href="{{ route('edit-destacados', $item->id) }}" class="btn btn-success btn-sm">Editar</a>

                                    {{-- <a id="{{ $item->id }}" onclick="document.getElementById('id01').style.display='block'" href="#" class="btn btn-danger btn-sm">Delete</a> --}}
                                    <button type="button" id="{{ $item->id }}" onclick="action(this.id)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                        Eliminar
                                    </button>
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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">¿Seguro que desea eliminar este destacado?</h5>
          <button type="button" class="btn btn-sm border shadow-0" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-muted" data-dismiss="modal">Cancelar</button>
            <form method="post" id="deleteForm" action="">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
</div>

  <script type="text/javascript">
    function action(id)
    {
        var url = "{{ route('delete-destacados', [':id']) }}";
        url = url.replace(':id', id);
        document.getElementById('deleteForm').setAttribute("action", url);
    }
  </script>

</section>

@endsection
