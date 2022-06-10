@extends('layouts.admin')

@section('content')

<section style="justify-content:center; align-items: center; display: flex;">
<div class="contaier mt-5" >
    <div class="row">
        <div class="col-md 12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Ofertas
                        <a style="margin-left: 500px" href="{{ url('add-ofertas') }}" class="btn btn-primary btn-sm float-right">Agregar Oferta</a>
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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ofertas as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->heading }}</td>
                                <td>
                                    <img src="{{ asset('uploads/ofertas/'.$item->image) }}" width="100px" height="50px" alt="oferta imagen">
                                </td>
                                <td>
                                    @if ($item->status == '1')
                                        Oculta
                                    @else
                                        Visible
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('edit-ofertas/'.$item->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <button type="button" id="{{ $item->id }}" onclick="action(this.id)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fa fa-trash"></i>
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
            <h5 class="modal-title" id="deleteModalLabel">¿Seguro que desea eliminar esta oferta?</h5>
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
        var url = "{{ route('delete-ofertas', [':id']) }}";
        url = url.replace(':id', id);
        document.getElementById('deleteForm').setAttribute("action", url);
    }
</script>
</section>

@endsection
