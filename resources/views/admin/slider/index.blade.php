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

                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
