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
                        Editar Datos
                        <a style="margin-left: 500px" href="{{ url('home-datos') }}" class="btn btn-danger btn-sm float-right">REGRESAR</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-datos/'.$dato->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="">Introducción</label>
                            <textarea type="text" name="intro" class="form-control">{{ $dato->intro }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">General</label>
                            <textarea name="general" class="form-control">{{ $dato->general }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Información del sitio</label>
                            <textarea type="text" name="info_website" class="form-control">{{ $dato->info_website }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Whatsapp Matriz</label>
                            <input type="text" name="wa_matriz" value="{{ $dato->wa_matriz }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Whatsapp Santa Ana</label>
                            <input type="text" name="wa_sa" value="{{ $dato->wa_sa }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Whatsapp San Salvador</label>
                            <input type="text" name="wa_ss" value="{{ $dato->wa_ss }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono Fijo Matríz</label>
                            <input type="text" name="fijo_matriz" value="{{ $dato->fijo_matriz }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono Fijo Santa Ana</label>
                            <input type="text" name="fijo_sa" value="{{ $dato->fijo_sa }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono Fijo San Salvador</label>
                            <input type="text" name="fijo_ss" value="{{ $dato->fijo_ss }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Matriz Lunes/Viernes</label>
                            <input type="text" name="horario_matriz_semana" value="{{ $dato->horario_matriz_semana }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Matriz Sabado</label>
                            <input type="text" name="horario_matriz_sabado" value="{{ $dato->horario_matriz_sabado }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Matriz Domingo</label>
                            <input type="text" name="horario_matriz_domingo" value="{{ $dato->horario_matriz_domingo }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Santa Ana Lunes/Viernes</label>
                            <input type="text" name="horario_sa_semana" value="{{ $dato->horario_sa_semana }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Santa Ana Sabado</label>
                            <input type="text" name="horario_sa_sabado" value="{{ $dato->horario_sa_sabado }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario Santa Ana Domingo</label>
                            <input type="text" name="horario_sa_domingo" value="{{ $dato->horario_sa_domingo }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario San Salvador Lunes/Viernes</label>
                            <input type="text" name="horario_ss_semana" value="{{ $dato->horario_ss_semana }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario San Salvador Sabado</label>
                            <input type="text" name="horario_ss_sabado" value="{{ $dato->horario_ss_sabado }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Horario San Salvador Domingo</label>
                            <input type="text" name="horario_ss_domingo" value="{{ $dato->horario_ss_domingo }}" class="form-control">
                        </div>
                        <div class="form-group" style="margin-top: 10px">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

