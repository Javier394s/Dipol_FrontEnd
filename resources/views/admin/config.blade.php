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
                        Editar configuración
                        <a style="margin-left: 500px" href="{{ url('home') }}" class="btn btn-danger btn-sm float-right">REGRESAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-config/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Introducción</label>
                            <textarea name="intro" class="form-control">{{ $config->intro }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Información General</label>
                            <textarea name="general" class="form-control">{{ $config->general }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Información sitio webl</label>
                            <textarea name="info_website" class="form-control">{{ $config->info_website }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Información General</label>
                            <textarea name="general" class="form-control">{{ $config->general }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Ubicaciones</label>
                            <textarea name="ubicaciones" class="form-control">{{ $config->ubicaciones }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Correo Santa Ana</label>
                            <input type="text" name="correo_sa" value="{{ $config->correo_sa }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Correo Santa Ana</label>
                            <input type="text" name="correo_ss" value="{{ $config->correo_ss }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">WhatsApp Santa Ana</label>
                            <input type="text" name="wa_sa" value="{{ $config->wa_sa }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">WhatsApp San Salvador</label>
                            <input type="text" name="wa_ss" value="{{ $config->wa_ss }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono fijo Santa Ana</label>
                            <input type="text" name="fijo_sa" value="{{ $config->fijo_sa }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono fijo San Salvador</label>
                            <input type="text" name="fijo_ss" value="{{ $config->fijo_ss }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Santa Ana - Domingo</label>
                            <input type="text" name="fijo_ss" value="{{ $config->horario_sa['domingo'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Santa Ana - Lunes - Viernes</label>
                            <input type="text" name="fijo_ss" value="{{ $config->horario_sa['lunes-viernes'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Santa Ana - Sábado</label>
                            <input type="text" name="fijo_ss" value="{{ $config->horario_sa['sabado'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario San Salvador - Domingo</label>
                            <input type="text" name="fijo_ss" value="{{ $config->horario_ss['domingo'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario San Salvador - Lunes - Viernes</label>
                            <input type="text" name="fijo_ss" value="{{ $config->horario_ss['lunes-viernes'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario San Salvador - Sábado</label>
                            <input type="text" name="fijo_ss" value="{{ $config->horario_ss['sabado'] }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Actualizar Información</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
